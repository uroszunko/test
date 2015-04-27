<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Opmanager',
	'Occupations and companies profiles'
);

$pluginSignature = str_replace('_','',$_EXTKEY) . '_opmanager';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_opmanager.xml');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Manager for occupation profiles');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_opmanager_domain_model_company', 'EXT:op_manager/Resources/Private/Language/locallang_csh_tx_opmanager_domain_model_company.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_opmanager_domain_model_company');

$GLOBALS['TCA']['tx_opmanager_domain_model_company'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:op_manager/Resources/Private/Language/locallang_db.xlf:tx_opmanager_domain_model_company',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',

		),
		'searchFields' => 'name,description,description2,description3,logo,photo,photo_caption,street,postal_code,city,telephone,telephone2,fax,website,email,contact_person_name,contact_person_telephone,contact_person_email,contact_person_fax,internships,contents,job_vacancies,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Company.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_opmanager_domain_model_company.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_opmanager_domain_model_occupation', 'EXT:op_manager/Resources/Private/Language/locallang_csh_tx_opmanager_domain_model_occupation.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_opmanager_domain_model_occupation');
$GLOBALS['TCA']['tx_opmanager_domain_model_occupation'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:op_manager/Resources/Private/Language/locallang_db.xlf:tx_opmanager_domain_model_occupation',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',

		),
		'searchFields' => 'name,image,image_caption,introduction,description,description2,description3,rating,opportunities,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Occupation.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_opmanager_domain_model_occupation.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_opmanager_domain_model_jobvacancies', 'EXT:op_manager/Resources/Private/Language/locallang_csh_tx_opmanager_domain_model_jobvacancies.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_opmanager_domain_model_jobvacancies');
$GLOBALS['TCA']['tx_opmanager_domain_model_jobvacancies'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:op_manager/Resources/Private/Language/locallang_db.xlf:tx_opmanager_domain_model_jobvacancies',
		'label' => 'occupation',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',

		'enablecolumns' => array(

		),
		'searchFields' => 'vacancies,occupation',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/JobVacancies.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_opmanager_domain_model_jobvacancies.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::makeCategorizable(
    $_EXTKEY,
    'tx_opmanager_domain_model_occupation',
	'categories',
	array(
		'fieldConfiguration' => array(
			'minitems' => '1'
		)
	)
);


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('sys_category',array(
	'image' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:op_manager/Resources/Private/Language/locallang_db.xlf:tx_opmanager_domain_model_category.image',
		'config' => 
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
			'images',
			array('maxitems' => 1),
			$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
		),
	)
));
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('sys_category', 'image','','before:description');
$GLOBALS['TCA']['sys_category']['columns']['description']['config'] = array(
	'type' => 'text',
	'cols' => 40,
	'rows' => 15,
	'eval' => 'trim',
	'wizards' => array(
		'RTE' => array(
			'icon' => 'wizard_rte2.gif',
			'notNewRecords'=> 1,
			'RTEonly' => 1,
			'script' => 'wizard_rte.php',
			'title' => 'LLL:EXT:cms/locallang_ttc.xlf:bodytext.W.RTE',
			'type' => 'script'
		)
	)
);
$GLOBALS['TCA']['sys_category']['types']['1']['showitem'] = str_replace('description','description;;;richtext:rte_transform[mode=ts_links]',$GLOBALS['TCA']['sys_category']['types']['1']['showitem']);
?>