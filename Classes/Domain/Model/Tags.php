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
 */
class Tx_Folio_Domain_Model_Tags extends Tx_Extbase_DomainObject_AbstractValueObject {

	/**
	 * @var DateTime
	 */
	protected $crdate;

	/**
	 * @var DateTime
	 */
	protected $tstamp;

	/**
	 * @var string
	 */
	protected $name;

	/**
	 * Get crdate
	 *
	 * @return DateTime
	 */
	public function getCrdate() {
		return $this->crdate;
	}

	/**
	 * Set crdate
	 *
	 * @param DateTime $crdate crdate
	 * @return void
	 */
	public function setCrdate($crdate) {
		$this->crdate = $crdate;
	}

	/**
	 * Get Tstamp
	 *
	 * @return DateTime
	 */
	public function getTstamp() {
		return $this->tstamp;
	}

	/**
	 * Set tstamp
	 *
	 * @param DateTime $tstamp tstamp
	 * @return void
	 */
	public function setTstamp($tstamp) {
		$this->tstamp = $tstamp;
	}

	/**
	 * Get title
	 *
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Set title
	 *
	 * @param string $title title
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

}
?>