<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_opmanager_domain_model_company'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_opmanager_domain_model_company']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, description, description2, description3, logo, photo, photo_caption, street, postal_code, city, telephone, telephone2, fax, website, email, contact_person_name, contact_person_telephone, contact_person_email, contact_person_fax, internships, contents, job_vacancies',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, name, description;;;richtext:rte_transform[mode=ts_links], description2;;;richtext:rte_transform[mode=ts_links], description3;;;richtext:rte_transform[mode=ts_links], logo, photo, photo_caption;;;richtext:rte_transform[mode=ts_links], 
									--div--;LLL:EXT:op_manager/Resources/Private/Language/locallang_db.xlf:tabs.location, street, postal_code, city, telephone, telephone2, fax, website, email, 
									--div--;LLL:EXT:op_manager/Resources/Private/Language/locallang_db.xlf:tabs.contact, contact_person_name, contact_person_telephone, contact_person_email, contact_person_fax, internships, 
									--div--;LLL:EXT:op_manager/Resources/Private/Language/locallang_db.xlf:tabs.vacancies, job_vacancies,
									--div--;LLL:EXT:op_manager/Resources/Private/Language/locallang_db.xlf:tabs.content, contents'
		)
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_opmanager_domain_model_company',
				'foreign_table_where' => 'AND tx_opmanager_domain_model_company.pid=###CURRENT_PID### AND tx_opmanager_domain_model_company.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'name' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:op_manager/Resources/Private/Language/locallang_db.xlf:tx_opmanager_domain_model_company.name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'description' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:op_manager/Resources/Private/Language/locallang_db.xlf:tx_opmanager_domain_model_company.description',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim,required',
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
			),
		),
		'description2' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:op_manager/Resources/Private/Language/locallang_db.xlf:tx_opmanager_domain_model_company.description2',
			'config' => array(
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
			),
		),
		'description3' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:op_manager/Resources/Private/Language/locallang_db.xlf:tx_opmanager_domain_model_company.description3',
			'config' => array(
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
			),
		),
		'logo' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:op_manager/Resources/Private/Language/locallang_db.xlf:tx_opmanager_domain_model_company.logo',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
				'logo',
				array('maxitems' => 1),
				$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
		),
		'photo' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:op_manager/Resources/Private/Language/locallang_db.xlf:tx_opmanager_domain_model_company.photo',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
				'photo',
				array('maxitems' => 1),
				$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
		),
		'photo_caption' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:op_manager/Resources/Private/Language/locallang_db.xlf:tx_opmanager_domain_model_company.photo_caption',
			'config' => array(
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
			),
		),
		'street' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:op_manager/Resources/Private/Language/locallang_db.xlf:tx_opmanager_domain_model_company.street',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'postal_code' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:op_manager/Resources/Private/Language/locallang_db.xlf:tx_opmanager_domain_model_company.postal_code',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'city' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:op_manager/Resources/Private/Language/locallang_db.xlf:tx_opmanager_domain_model_company.city',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'telephone' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:op_manager/Resources/Private/Language/locallang_db.xlf:tx_opmanager_domain_model_company.telephone',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'telephone2' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:op_manager/Resources/Private/Language/locallang_db.xlf:tx_opmanager_domain_model_company.telephone2',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'fax' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:op_manager/Resources/Private/Language/locallang_db.xlf:tx_opmanager_domain_model_company.fax',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'website' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:op_manager/Resources/Private/Language/locallang_db.xlf:tx_opmanager_domain_model_company.website',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'email' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:op_manager/Resources/Private/Language/locallang_db.xlf:tx_opmanager_domain_model_company.email',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'contact_person_name' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:op_manager/Resources/Private/Language/locallang_db.xlf:tx_opmanager_domain_model_company.contact_person_name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'contact_person_telephone' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:op_manager/Resources/Private/Language/locallang_db.xlf:tx_opmanager_domain_model_company.contact_person_telephone',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'contact_person_email' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:op_manager/Resources/Private/Language/locallang_db.xlf:tx_opmanager_domain_model_company.contact_person_email',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'contact_person_fax' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:op_manager/Resources/Private/Language/locallang_db.xlf:tx_opmanager_domain_model_company.contact_person_fax',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'internships' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:op_manager/Resources/Private/Language/locallang_db.xlf:tx_opmanager_domain_model_company.internships',
			'config' => array(
				'type' => 'check',
				'default' => 0
			)
		),
		'contents' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:op_manager/Resources/Private/Language/locallang_db.xlf:tx_opmanager_domain_model_company.contents',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tt_content',
				'foreign_field' => 'company',
				'maxitems'      => 9999,
				'appearance' => array(
					'collapseAll' => 1,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),

		),
		'job_vacancies' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:op_manager/Resources/Private/Language/locallang_db.xlf:tx_opmanager_domain_model_company.job_vacancies',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_opmanager_domain_model_jobvacancies',
				'foreign_field' => 'company',
				'foreign_unique' => 'occupation',
				'maxitems'      => 9999,
				'appearance' => array(
					'collapseAll' => 1,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),

		),
		
	),
);
