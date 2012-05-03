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
class Tx_Folio_Controller_CustomerController extends Tx_Extbase_MVC_Controller_ActionController
{

	/**
	 * customerRepository
	 *
	 * @var Tx_Folio_Domain_Repository_CustomerRepository
	 */
	protected $customerRepository;

	/**
	 * injectCustomerRepository
	 *
	 * @param Tx_Folio_Domain_Repository_CustomerRepository $customerRepository
	 * @return void
	 */
	public function injectCustomerRepository(Tx_Folio_Domain_Repository_CustomerRepository $customerRepository)
	{
		$this->customerRepository = $customerRepository;
	}

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction()
	{
		$customers = $this->customerRepository->findAll();
		$this->view->assign('customers', $customers);
	}

	/**
	 * action show
	 *
	 * @param $customer
	 * @return void
	 */
	public function showAction(Tx_Folio_Domain_Model_Customer $customer)
	{
		$this->view->assign('customer', $customer);
	}

}
?>