<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$pathLL = 'LLL:EXT:folio/Resources/Private/Language/locallang_db.xml:';

$TCA['tx_folio_domain_model_project'] = array(
	'ctrl' => $TCA['tx_folio_domain_model_project']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, tags, content',
	),
	'types' => array(
		'1' => array(
			'showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, name,'
						. '--div--;LLL:EXT:folio/Resources/Private/Language/locallang_tca.xml:tabs.ce, content,'
						. '--div--;LLL:EXT:folio/Resources/Private/Language/locallang_tca.xml:tabs.relations, tags,'
						. '--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access, hidden;;1, starttime, endtime'
		),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xml:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xml:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_folio_domain_model_project',
				'foreign_table_where' => 'AND tx_folio_domain_model_project.pid=###CURRENT_PID### AND tx_folio_domain_model_project.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'name' => array(
			'exclude' => 0,
			'label' => $pathLL . 'tx_folio_domain_model_project.name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'tags' => array(
			'exclude' => 0,
			'label' => $pathLL . 'tx_folio_domain_model_project.tags',
			'config' => array(
				'type' => 'group',
				'internal_type' => 'db',
				'allowed' => 'tx_folio_domain_model_tags',
				'MM' => 'tx_folio_domain_model_project_tags_mm',
				'foreign_table' => 'tx_folio_domain_model_tags',
				'foreign_table_where' => 'ORDER BY tx_folio_domain_model_tags.name',
				'size' => 10,
				'autoSizeMax' => 20,
				'minitems' => 0,
				'maxitems' => 20,
				'wizards' => array(
					'_PADDING'  => 2,
					'_VERTICAL' => 1,
					'suggest' => array(
						'type' => 'suggest',
						'default' => array(
							'receiverClass' => 'Tx_Folio_Hooks_SuggestReceiver'
						),
					),
					'list' => array(
						'type'   => 'script',
						'title'  => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xml:tx_folio_domain_model_tags.tags.list',
						'icon'   => 'list.gif',
						'params' => array(
							'table' => 'tx_folio_domain_model_tags',
							//'pid'   => $configuration->getTagPid(),
						),
						'script' => 'wizard_list.php',
					),
				),
			),
		),
		'content' => array(
			'exclude' => 0,
			'label' => $pathLL . 'tx_folio_domain_model_project.content',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tt_content',
				'foreign_field' => 'project',
				'maxitems'      => 9999,
				'appearance' => array(
					'collapseAll' => 1,
					'expandSingle' => 1,
					'levelLinksPosition' => 'bottom',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		'customer' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
	),
);

?>