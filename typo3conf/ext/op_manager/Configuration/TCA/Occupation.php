<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_opmanager_domain_model_occupation'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_opmanager_domain_model_occupation']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, image, image_caption, introduction, description, description2, description3, rating, opportunities',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, name, rating, image, image_caption;;;richtext:rte_transform[mode=ts_links], introduction;;;richtext:rte_transform[mode=ts_links], opportunities;;;richtext:rte_transform[mode=ts_links],
									--div--;LLL:EXT:op_manager/Resources/Private/Language/locallang_db.xlf:tabs.description, description;;;richtext:rte_transform[mode=ts_links], description2;;;richtext:rte_transform[mode=ts_links], description3;;;richtext:rte_transform[mode=ts_links]'
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
				'foreign_table' => 'tx_opmanager_domain_model_occupation',
				'foreign_table_where' => 'AND tx_opmanager_domain_model_occupation.pid=###CURRENT_PID### AND tx_opmanager_domain_model_occupation.sys_language_uid IN (-1,0)',
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
			'label' => 'LLL:EXT:op_manager/Resources/Private/Language/locallang_db.xlf:tx_opmanager_domain_model_occupation.name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'image' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:op_manager/Resources/Private/Language/locallang_db.xlf:tx_opmanager_domain_model_occupation.image',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
				'image',
				array('maxitems' => 1),
				$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
		),
		'image_caption' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:op_manager/Resources/Private/Language/locallang_db.xlf:tx_opmanager_domain_model_occupation.image_caption',
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
		'introduction' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:op_manager/Resources/Private/Language/locallang_db.xlf:tx_opmanager_domain_model_occupation.introduction',
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
		'description' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:op_manager/Resources/Private/Language/locallang_db.xlf:tx_opmanager_domain_model_occupation.description',
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
		'description2' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:op_manager/Resources/Private/Language/locallang_db.xlf:tx_opmanager_domain_model_occupation.description2',
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
			'label' => 'LLL:EXT:op_manager/Resources/Private/Language/locallang_db.xlf:tx_opmanager_domain_model_occupation.description3',
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
		'rating' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:op_manager/Resources/Private/Language/locallang_db.xlf:tx_opmanager_domain_model_occupation.rating',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('-- 1 --', 1),
					array('-- 2 --', 2),
					array('-- 3 --', 3),
					array('-- 4 --', 4),
					array('-- 5 --', 5)
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => 'required'
			),
		),
		'opportunities' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:op_manager/Resources/Private/Language/locallang_db.xlf:tx_opmanager_domain_model_occupation.opportunities',
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
		)
	),
);
