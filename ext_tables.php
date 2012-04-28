<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

// Build extension name vars - used for plugin registration, flexforms and similar
$extensionName = t3lib_div::underscoredToUpperCamelCase($_EXTKEY);
$pluginSignature = strtolower($extensionName) . '_pi1';

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Pi1',
	'Folio'
);

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Folio');

t3lib_extMgm::addLLrefForTCAdescr('tx_folio_domain_model_customer', 'EXT:folio/Resources/Private/Language/locallang_csh_tx_folio_domain_model_customer.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_folio_domain_model_customer');
$TCA['tx_folio_domain_model_customer'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:folio/Resources/Private/Language/locallang_db.xml:tx_folio_domain_model_customer',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'sortby' => 'sorting',
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Customer.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_folio_domain_model_customer.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_folio_domain_model_project', 'EXT:folio/Resources/Private/Language/locallang_csh_tx_folio_domain_model_project.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_folio_domain_model_project');
$TCA['tx_folio_domain_model_project'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:folio/Resources/Private/Language/locallang_db.xml:tx_folio_domain_model_project',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Project.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_folio_domain_model_project.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_folio_domain_model_tags', 'EXT:folio/Resources/Private/Language/locallang_csh_tx_folio_domain_model_tags.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_folio_domain_model_tags');
$TCA['tx_folio_domain_model_tags'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:folio/Resources/Private/Language/locallang_db.xml:tx_folio_domain_model_tags',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Tags.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_folio_domain_model_tags.gif'
	),
);

$tmp_folio_columns['project'] = array(
	'config' => array(
		'type' => 'passthrough',
	)
);

t3lib_extMgm::addTCAcolumns('tt_content',$tmp_folio_columns);

$TCA['tt_content']['columns'][$TCA['tt_content']['ctrl']['type']]['config']['items'][] = array('LLL:EXT:folio/Resources/Private/Language/locallang_db.xml:tt_content.tx_extbase_type.Tx_Folio_Content','Tx_Folio_Content');

$TCA['tt_content']['types']['Tx_Folio_Content']['showitem'] = $TCA['tt_content']['types']['1']['showitem'];
$TCA['tt_content']['types']['Tx_Folio_Content']['showitem'] .= ',--div--;LLL:EXT:folio/Resources/Private/Language/locallang_db.xml:tx_folio_domain_model_content,';
$TCA['tt_content']['types']['Tx_Folio_Content']['showitem'] .= '';

if (TYPO3_MODE === 'BE') {
	// Add Plugin to CE Wizard
	$TBE_MODULES_EXT['xMOD_db_new_content_el']['addElClasses'][$pluginSignature . '_wizicon'] = t3lib_extMgm::extPath($_EXTKEY) . 'Resources/Private/Php/class.' . $_EXTKEY . '_wizicon.php';
}
?>