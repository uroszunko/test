<?php
/*
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'WM.' . $_EXTKEY,
	'Opmanager1',
	array(
		'Company' => 'homepage, list, show',
		'Occupation' => 'list, show'
	),
	// non-cacheable actions
	array(
		'Company' => 'homepage, list, show',
		'Occupation' => 'list, show'
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'WM.' . $_EXTKEY,
	'Opmanager2',
	array(
		'Category' => 'list'
	),
	// non-cacheable actions
	array(
		'Category' => 'list'
	)
);
*/
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'WM.' . $_EXTKEY,
	'Opmanager',
	array(
		'Company' => 'homepage, list, show',
		'Occupation' => 'list, show',
		'Category' => 'list'
	),
	// non-cacheable actions
	array(
		'Company' => 'homepage, list, show',
		'Occupation' => 'list, show',
		'Category' => 'list'
	)
);