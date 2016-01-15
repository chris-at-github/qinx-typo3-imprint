<?php
namespace Qinx\Qximprint\Controller;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016 Christian Pschorr <pschorr.christian@gmail.com>
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
 * DataController
 */
class DataController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * Initializes the controller before invoking an action method.
	 *
	 * Override this method to solve tasks which all actions have in
	 * common.
	 *
	 * @return void
	 * @api
	 */
	protected function initializeAction() {
		if((int)\TYPO3\CMS\Core\Utility\GeneralUtility::_GP('type') === (int) $this->settings['getActionTypeNum']) {
			$this->defaultViewObjectName = \TYPO3\CMS\Extbase\Mvc\View\JsonView::class;
		}
	}
    
	/**
	 * action get
	 *
	 * @return void
	 */
	public function getAction() {
		$this->view->assign('value', $this->objectManager->get('Qinx\Qximprint\Domain\Repository\DataRepository')->findByUid((int) $this->settings['defaultUsedRecord']));
	}

	/**
	 * action show
	 *
	 * @return void
	 */
	public function showAction() {
		$this->view->assign('data', $this->objectManager->get('Qinx\Qximprint\Domain\Repository\DataRepository')->findByUid((int)$this->settings['defaultUsedRecord']));
	}
}