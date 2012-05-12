<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Andy Hausmann <hi@andy-hausmann.de>
 *  Andreas Walter <mail@andreas-walter.de>
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
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
 *
 *
 * @package folio
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Tx_Folio_Domain_Model_Customer extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * title
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $title;

	/**
	 * image
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $image;

	/**
	 * description
	 *
	 * @var string
	 */
	protected $description;

	/**
	 * project
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Folio_Domain_Model_Project>
	 * @lazy
	 */
	protected $project;

	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all Tx_Extbase_Persistence_ObjectStorage properties.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		/**
		 * Do not modify this method!
		 * It will be rewritten on each save in the extension builder
		 * You may modify the constructor of this class instead
		 */
		$this->project = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Returns the title
	 *
	 * @return string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Returns the image
	 *
	 * @return string $image
	 */
	public function getImage() {
		return $this->image;
	}

	/**
	 * Sets the image
	 *
	 * @param string $image
	 * @return void
	 */
	public function setImage($image) {
		$this->image = $image;
	}

	/**
	 * Returns the description
	 *
	 * @return string $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets the description
	 *
	 * @param string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Adds a Project
	 *
	 * @param Tx_Folio_Domain_Model_Project $project
	 * @return void
	 */
	public function addProject(Tx_Folio_Domain_Model_Project $project) {
		$this->project->attach($project);
	}

	/**
	 * Removes a Project
	 *
	 * @param Tx_Folio_Domain_Model_Project $projectToRemove The Project to be removed
	 * @return void
	 */
	public function removeProject(Tx_Folio_Domain_Model_Project $projectToRemove) {
		$this->project->detach($projectToRemove);
	}

	/**
	 * Returns the project
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Folio_Domain_Model_Project> $project
	 */
	public function getProject() {
		return $this->project;
	}

	/**
	 * Sets the project
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Folio_Domain_Model_Project> $project
	 * @return void
	 */
	public function setProject(Tx_Extbase_Persistence_ObjectStorage $project) {
		$this->project = $project;
	}

}
?>