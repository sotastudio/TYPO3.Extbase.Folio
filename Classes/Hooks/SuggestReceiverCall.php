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
 * Ajax response class for custom suggest receiver
 *
 * @package folio
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_Folio_Hooks_SuggestReceiverCall {

	const TABLE_TAGS = 'tx_folio_domain_model_tags';
	const TABLE_PROJECT = 'tx_folio_domain_model_project';
	const LLPATH = 'LLL:EXT:folio/Resources/Private/Language/locallang_be.xml:tag_suggest_';

	/**
	 * Create a tag
	 *
	 * @param array $params
	 * @param TYPO3AJAX $ajaxObj
	 * @return void
	 */
	public function createTag(array $params, TYPO3AJAX $ajaxObj) {
		$request = t3lib_div::_POST();

		try {
				// check if a tag is submitted
			if (!isset($request['item']) || empty($request['item'])) {
				throw new Exception('error_no-tag');
			}

			$newsUid = $request['newsid'];
			if ((int)$newsUid === 0 && (strlen($newsUid) == 16 && !t3lib_div::isFirstPartOfStr($newsUid, 'NEW'))) {
				throw new Exception('error_no-newsid');
			}

				// get tag uid
			$newTagId = $this->getTagUid($request);

			$ajaxObj->setContentFormat('javascript');
			$ajaxObj->setContent('');
			$response = array(
				$newTagId,
				$request['item'],
				self::TABLE_TAGS,
				self::TABLE_PROJECT,
				'tags',
				'data[tx_folio_domain_model_project][' . $newsUid . '][tags]',
				$newsUid
			);
			$ajaxObj->setJavascriptCallbackWrap(implode('-', $response));
		} catch (Exception $e) {
			$errorMsg = $GLOBALS['LANG']->sL(self::LLPATH . $e->getMessage());
			$ajaxObj->setError($errorMsg);
		}
	}

	/**
	 * Get the uid of the tag, either bei inserting as new or get existing
	 *
	 * @param array $request ajax request
	 * @return integer
	 */
	protected function getTagUid(array $request) {
		$tagUid = 0;
		$pageId = $request['pageid'];

		$record = $GLOBALS['TYPO3_DB']->exec_SELECTgetSingleRow(
					'*',
					self::TABLE_TAGS,
					//'deleted=0 AND pid=' . $pageId .
					'deleted=0' .
						' AND name=' . $GLOBALS['TYPO3_DB']->fullQuoteStr($request['item'], self::TABLE_TAGS)
					);
		if(isset($record['uid'])) {
			$tagUid = $record['uid'];
		} else {
			$tcemainData = array(
				self::TABLE_TAGS => array(
					'NEW' => array(
						'pid' => $pageId,
						'name' => $request['item']
					)
				)
			);

			/**
			 * @var t3lib_TCEmain
			 */
			$tce = t3lib_div::makeInstance('t3lib_TCEmain');
			$tce->start($tcemainData, array());
			$tce->process_datamap();

			$tagUid = $tce->substNEWwithIDs['NEW'];
		}

		if ($tagUid == 0) {
			throw new Exception('error_no-tag-created');
		}

		return $tagUid;
	}

}

?>