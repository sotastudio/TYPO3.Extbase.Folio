<?php

########################################################################
# Extension Manager/Repository config file for ext "folio".
#
# Auto generated 25-04-2012 23:46
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Folio',
	'description' => 'Library for your Portfolio and References.',
	'category' => 'plugin',
	'author' => 'Andy Hausmann, Andreas Walter',
	'author_email' => 'hi@andy-hausmann.de, mail@andreas-walter.de',
	'author_company' => '',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => 1,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '1.0.0',
	'constraints' => array(
		'depends' => array(
			'extbase' => '1.3',
			'fluid' => '1.3',
			'typo3' => '4.5-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
			't3jquery' => '',
		),
	),
	'_md5_values_when_last_written' => 'a:45:{s:21:"ExtensionBuilder.json";s:4:"975d";s:12:"ext_icon.gif";s:4:"e922";s:17:"ext_localconf.php";s:4:"d5fa";s:14:"ext_tables.php";s:4:"b1ef";s:14:"ext_tables.sql";s:4:"7969";s:24:"ext_typoscript_setup.txt";s:4:"d41d";s:41:"Classes/Controller/CustomerController.php";s:4:"4454";s:40:"Classes/Controller/ProjectController.php";s:4:"3846";s:32:"Classes/Domain/Model/Content.php";s:4:"d8f8";s:33:"Classes/Domain/Model/Customer.php";s:4:"5370";s:32:"Classes/Domain/Model/Project.php";s:4:"bbbd";s:29:"Classes/Domain/Model/Tags.php";s:4:"2ed5";s:48:"Classes/Domain/Repository/CustomerRepository.php";s:4:"efb9";s:44:"Configuration/ExtensionBuilder/settings.yaml";s:4:"9471";s:29:"Configuration/TCA/Content.php";s:4:"a0fd";s:30:"Configuration/TCA/Customer.php";s:4:"7f78";s:29:"Configuration/TCA/Project.php";s:4:"5184";s:26:"Configuration/TCA/Tags.php";s:4:"f7fb";s:38:"Configuration/TypoScript/constants.txt";s:4:"718e";s:34:"Configuration/TypoScript/setup.txt";s:4:"dae0";s:40:"Resources/Private/Language/locallang.xml";s:4:"61bd";s:55:"Resources/Private/Language/locallang_csh_tt_content.xml";s:4:"f332";s:78:"Resources/Private/Language/locallang_csh_tx_folio_domain_model_customer.xml";s:4:"cef5";s:77:"Resources/Private/Language/locallang_csh_tx_folio_domain_model_project.xml";s:4:"d9da";s:74:"Resources/Private/Language/locallang_csh_tx_folio_domain_model_tags.xml";s:4:"a3b7";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"9547";s:38:"Resources/Private/Layouts/Default.html";s:4:"0e10";s:51:"Resources/Private/Partials/Customer/Properties.html";s:4:"1224";s:50:"Resources/Private/Partials/Project/Properties.html";s:4:"6759";s:46:"Resources/Private/Templates/Customer/List.html";s:4:"1766";s:46:"Resources/Private/Templates/Customer/Show.html";s:4:"aee9";s:45:"Resources/Private/Templates/Project/List.html";s:4:"a82c";s:45:"Resources/Private/Templates/Project/Show.html";s:4:"09d9";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";s:37:"Resources/Public/Icons/tt_content.gif";s:4:"4e5b";s:60:"Resources/Public/Icons/tx_folio_domain_model_customer.gif";s:4:"905a";s:59:"Resources/Public/Icons/tx_folio_domain_model_project.gif";s:4:"1103";s:56:"Resources/Public/Icons/tx_folio_domain_model_tags.gif";s:4:"4e5b";s:48:"Tests/Unit/Controller/CustomerControllerTest.php";s:4:"3a95";s:47:"Tests/Unit/Controller/ProjectControllerTest.php";s:4:"04c1";s:39:"Tests/Unit/Domain/Model/ContentTest.php";s:4:"87cb";s:40:"Tests/Unit/Domain/Model/CustomerTest.php";s:4:"f13b";s:39:"Tests/Unit/Domain/Model/ProjectTest.php";s:4:"4971";s:36:"Tests/Unit/Domain/Model/TagsTest.php";s:4:"1104";s:14:"doc/manual.sxw";s:4:"8d2d";}',
);

?>