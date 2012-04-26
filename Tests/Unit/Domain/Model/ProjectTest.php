<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Andy Hausmann <hi@andy-hausmann.de>
 *  			Andreas Walter <mail@andreas-walter.de>
 *  			
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Test case for class Tx_Folio_Domain_Model_Project.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Folio
 *
 * @author Andy Hausmann <hi@andy-hausmann.de>
 * @author Andreas Walter <mail@andreas-walter.de>
 */
class Tx_Folio_Domain_Model_ProjectTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_Folio_Domain_Model_Project
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_Folio_Domain_Model_Project();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getNameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setNameForStringSetsName() { 
		$this->fixture->setName('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getName()
		);
	}
	
	/**
	 * @test
	 */
	public function getTagsReturnsInitialValueForObjectStorageContainingTx_Folio_Domain_Model_Tags() {
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getTags()
		);
	}

	/**
	 * @test
	 */
	public function setTagsForObjectStorageContainingTx_Folio_Domain_Model_TagsSetsTags() {
		$tag = new Tx_Folio_Domain_Model_Tags();
		$objectStorageHoldingExactlyOneTags = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneTags->attach($tag);
		$this->fixture->setTags($objectStorageHoldingExactlyOneTags);

		$this->assertSame(
			$objectStorageHoldingExactlyOneTags,
			$this->fixture->getTags()
		);
	}
	
	/**
	 * @test
	 */
	public function addTagToObjectStorageHoldingTags() {
		$tag = new Tx_Folio_Domain_Model_Tags();
		$objectStorageHoldingExactlyOneTag = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneTag->attach($tag);
		$this->fixture->addTag($tag);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneTag,
			$this->fixture->getTags()
		);
	}

	/**
	 * @test
	 */
	public function removeTagFromObjectStorageHoldingTags() {
		$tag = new Tx_Folio_Domain_Model_Tags();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($tag);
		$localObjectStorage->detach($tag);
		$this->fixture->addTag($tag);
		$this->fixture->removeTag($tag);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getTags()
		);
	}
	
	/**
	 * @test
	 */
	public function getContentReturnsInitialValueForObjectStorageContainingTx_Folio_Domain_Model_Content() {
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getContent()
		);
	}

	/**
	 * @test
	 */
	public function setContentForObjectStorageContainingTx_Folio_Domain_Model_ContentSetsContent() {
		$content = new Tx_Folio_Domain_Model_Content();
		$objectStorageHoldingExactlyOneContent = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneContent->attach($content);
		$this->fixture->setContent($objectStorageHoldingExactlyOneContent);

		$this->assertSame(
			$objectStorageHoldingExactlyOneContent,
			$this->fixture->getContent()
		);
	}
	
	/**
	 * @test
	 */
	public function addContentToObjectStorageHoldingContent() {
		$content = new Tx_Folio_Domain_Model_Content();
		$objectStorageHoldingExactlyOneContent = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneContent->attach($content);
		$this->fixture->addContent($content);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneContent,
			$this->fixture->getContent()
		);
	}

	/**
	 * @test
	 */
	public function removeContentFromObjectStorageHoldingContent() {
		$content = new Tx_Folio_Domain_Model_Content();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($content);
		$localObjectStorage->detach($content);
		$this->fixture->addContent($content);
		$this->fixture->removeContent($content);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getContent()
		);
	}
	
}
?>