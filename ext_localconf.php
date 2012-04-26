<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Folio',
	array(
		'Customer' => 'list, show',
		'Project' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'Customer' => '',
		'Project' => '',
		
	)
);

?>