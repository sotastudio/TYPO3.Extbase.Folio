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
class Tx_Folio_Domain_Model_Project extends Tx_Extbase_DomainObject_AbstractEntity
{

	/**
	 * customer
	 *
	 * @var Tx_Folio_Domain_Model_Customer
	 */
	protected $customer;

	/**
	 * title
	 *
	 * @var string
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
	 * tags
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Folio_Domain_Model_Tags>
	 * @lazy
	 */
	protected $tags;

	/**
	 * content
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Folio_Domain_Model_Content> $content
	 * @lazy
	 */
	protected $content;

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
		$this->customer = new Tx_Extbase_Persistence_ObjectStorage();

		$this->tags = new Tx_Extbase_Persistence_ObjectStorage();
		
		$this->content = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Returns the customer
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Folio_Domain_Model_Customer> $customer
	 */
	public function getCustomer() {
		return $this->customer;
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
	 * Adds a Tag
	 *
	 * @param Tx_Folio_Domain_Model_Tags $tag
	 * @return void
	 */
	public function addTag(Tx_Folio_Domain_Model_Tags $tag) {
		$this->tags->attach($tag);
	}

	/**
	 * Removes a Tag
	 *
	 * @param Tx_Folio_Domain_Model_Tags $tagToRemove The Tags to be removed
	 * @return void
	 */
	public function removeTag(Tx_Folio_Domain_Model_Tags $tagToRemove) {
		$this->tags->detach($tagToRemove);
	}

	/**
	 * Returns the tags
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Folio_Domain_Model_Tags> $tags
	 */
	public function getTags() {
		return $this->tags;
	}

	/**
	 * Sets the tags
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Folio_Domain_Model_Tags> $tags
	 * @return void
	 */
	public function setTags(Tx_Extbase_Persistence_ObjectStorage $tags) {
		$this->tags = $tags;
	}

	/**
	 * Adds a Content
	 *
	 * @param Tx_Folio_Domain_Model_Content $content
	 * @return void
	 */
	public function addContent(Tx_Folio_Domain_Model_Content $content) {
		$this->content->attach($content);
	}

	/**
	 * Removes a Content
	 *
	 * @param Tx_Folio_Domain_Model_Content $contentToRemove The Content to be removed
	 * @return void
	 */
	public function removeContent(Tx_Folio_Domain_Model_Content $contentToRemove) {
		$this->content->detach($contentToRemove);
	}

	/**
	 * Returns the content
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Folio_Domain_Model_Content> $content
	 */
	public function getContent() {
		return $this->content;
	}

	/**
	 * Sets the content
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Folio_Domain_Model_Content> $content
	 * @return void
	 */
	public function setContent(Tx_Extbase_Persistence_ObjectStorage $content) {
		$this->content = $content;
	}

}
?>