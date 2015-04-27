<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_opmanager_domain_model_jobvacancies'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_opmanager_domain_model_jobvacancies']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, vacancies, occupation',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, 
									--palette--;;default'),
	),
	'palettes' => array(
		'default' => array(
			'showitem' => 'occupation, vacancies',
			'canNotCollapse' => 1
		)
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
				'foreign_table' => 'tx_opmanager_domain_model_jobvacancies',
				'foreign_table_where' => 'AND tx_opmanager_domain_model_jobvacancies.pid=###CURRENT_PID### AND tx_opmanager_domain_model_jobvacancies.sys_language_uid IN (-1,0)',
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

		'vacancies' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:op_manager/Resources/Private/Language/locallang_db.xlf:tx_opmanager_domain_model_jobvacancies.vacancies',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			)
		),
		'occupation' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:op_manager/Resources/Private/Language/locallang_db.xlf:tx_opmanager_domain_model_jobvacancies.occupation',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_opmanager_domain_model_occupation',
				'minitems' => 1,
				'maxitems' => 1,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		
		'company' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
	),
);
