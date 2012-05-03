<?php

########################################################################
# Extension Manager/Repository config file for ext "folio".
#
# Auto generated 03-05-2012 21:11
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
	'_md5_values_when_last_written' => 'a:55:{s:9:"README.md";s:4:"95dc";s:12:"ext_icon.gif";s:4:"e922";s:17:"ext_localconf.php";s:4:"e70c";s:14:"ext_tables.php";s:4:"7320";s:14:"ext_tables.sql";s:4:"cea8";s:12:"t3jquery.txt";s:4:"a6b5";s:41:"Classes/Controller/CustomerController.php";s:4:"281d";s:40:"Classes/Controller/ProjectController.php";s:4:"db39";s:32:"Classes/Domain/Model/Content.php";s:4:"aa13";s:33:"Classes/Domain/Model/Customer.php";s:4:"7c5e";s:32:"Classes/Domain/Model/Project.php";s:4:"f4f2";s:29:"Classes/Domain/Model/Tags.php";s:4:"71b0";s:48:"Classes/Domain/Repository/CustomerRepository.php";s:4:"549f";s:33:"Classes/Hooks/SuggestReceiver.php";s:4:"2014";s:37:"Classes/Hooks/SuggestReceiverCall.php";s:4:"e546";s:42:"Classes/ViewHelpers/AddCssJsViewHelper.php";s:4:"d6aa";s:43:"Classes/ViewHelpers/AddJQueryViewHelper.php";s:4:"d34c";s:36:"Configuration/FlexForms/flexform.xml";s:4:"608d";s:29:"Configuration/TCA/Content.php";s:4:"a0fd";s:30:"Configuration/TCA/Customer.php";s:4:"11c9";s:29:"Configuration/TCA/Project.php";s:4:"47dd";s:26:"Configuration/TCA/Tags.php";s:4:"5445";s:38:"Configuration/TypoScript/constants.txt";s:4:"4b4c";s:34:"Configuration/TypoScript/setup.txt";s:4:"f8e5";s:40:"Resources/Private/Language/locallang.xml";s:4:"c86d";s:43:"Resources/Private/Language/locallang_be.xml";s:4:"bbc9";s:55:"Resources/Private/Language/locallang_csh_tt_content.xml";s:4:"f332";s:75:"Resources/Private/Language/locallang_csh_tx_folio_domain_model_customer.xml";s:4:"3a81";s:74:"Resources/Private/Language/locallang_csh_tx_folio_domain_model_project.xml";s:4:"0c5b";s:71:"Resources/Private/Language/locallang_csh_tx_folio_domain_model_tags.xml";s:4:"eeb5";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"befc";s:44:"Resources/Private/Language/locallang_tca.xml";s:4:"ab77";s:38:"Resources/Private/Layouts/Default.html";s:4:"56b7";s:45:"Resources/Private/Partials/ResourceFiles.html";s:4:"ca1d";s:51:"Resources/Private/Partials/Customer/Properties.html";s:4:"1d16";s:50:"Resources/Private/Partials/Project/Properties.html";s:4:"ac42";s:45:"Resources/Private/Php/class.folio_wizicon.php";s:4:"5023";s:46:"Resources/Private/Templates/Customer/List.html";s:4:"f66a";s:46:"Resources/Private/Templates/Customer/Show.html";s:4:"e5be";s:45:"Resources/Private/Templates/Project/List.html";s:4:"2fbd";s:45:"Resources/Private/Templates/Project/Show.html";s:4:"0b4e";s:31:"Resources/Public/Css/styles.css";s:4:"d41d";s:37:"Resources/Public/Icons/pi1_ce_wiz.gif";s:4:"a145";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";s:37:"Resources/Public/Icons/tt_content.gif";s:4:"4e5b";s:57:"Resources/Public/Icons/tx_folio_domain_model_customer.gif";s:4:"905a";s:56:"Resources/Public/Icons/tx_folio_domain_model_project.gif";s:4:"1103";s:53:"Resources/Public/Icons/tx_folio_domain_model_tags.gif";s:4:"4e5b";s:33:"Resources/Public/Js/jquery-min.js";s:4:"398f";s:48:"Tests/Unit/Controller/CustomerControllerTest.php";s:4:"e22e";s:47:"Tests/Unit/Controller/ProjectControllerTest.php";s:4:"29c0";s:39:"Tests/Unit/Domain/Model/ContentTest.php";s:4:"549a";s:40:"Tests/Unit/Domain/Model/CustomerTest.php";s:4:"c4b5";s:39:"Tests/Unit/Domain/Model/ProjectTest.php";s:4:"c350";s:36:"Tests/Unit/Domain/Model/TagsTest.php";s:4:"6965";}',
);

?>