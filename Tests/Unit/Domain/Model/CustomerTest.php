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
 * Test case for class Tx_Folio_Domain_Model_Customer.
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
class Tx_Folio_Domain_Model_CustomerTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_Folio_Domain_Model_Customer
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_Folio_Domain_Model_Customer();
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
	public function getLogoReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setLogoForStringSetsLogo() { 
		$this->fixture->setLogo('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getLogo()
		);
	}
	
	/**
	 * @test
	 */
	public function getDescriptionReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setDescriptionForStringSetsDescription() { 
		$this->fixture->setDescription('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getDescription()
		);
	}
	
	/**
	 * @test
	 */
	public function getProjectReturnsInitialValueForObjectStorageContainingTx_Folio_Domain_Model_Project() {
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getProject()
		);
	}

	/**
	 * @test
	 */
	public function setProjectForObjectStorageContainingTx_Folio_Domain_Model_ProjectSetsProject() {
		$project = new Tx_Folio_Domain_Model_Project();
		$objectStorageHoldingExactlyOneProject = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneProject->attach($project);
		$this->fixture->setProject($objectStorageHoldingExactlyOneProject);

		$this->assertSame(
			$objectStorageHoldingExactlyOneProject,
			$this->fixture->getProject()
		);
	}
	
	/**
	 * @test
	 */
	public function addProjectToObjectStorageHoldingProject() {
		$project = new Tx_Folio_Domain_Model_Project();
		$objectStorageHoldingExactlyOneProject = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneProject->attach($project);
		$this->fixture->addProject($project);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneProject,
			$this->fixture->getProject()
		);
	}

	/**
	 * @test
	 */
	public function removeProjectFromObjectStorageHoldingProject() {
		$project = new Tx_Folio_Domain_Model_Project();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($project);
		$localObjectStorage->detach($project);
		$this->fixture->addProject($project);
		$this->fixture->removeProject($project);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getProject()
		);
	}
	
}
?>