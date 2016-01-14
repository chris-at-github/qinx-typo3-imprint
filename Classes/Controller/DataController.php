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
	 * @var string
	 */
	protected $defaultViewObjectName = 'TYPO3\CMS\Extbase\Mvc\View\JsonView';
    
	/**
	 * action get
	 *
	 * @return void
	 */
	public function getAction() {
		$this->view->setVariablesToRender(array('data'));
		$this->view->assign('data', $this->objectManager->get('Qinx\Qximprint\Domain\Repository\DataRepository')->findByUid(1));
	}

	/**
	 * action show
	 *
	 * @param \Qinx\Qximprint\Domain\Model\Data $data
	 * @return void
	 */
	public function showAction(\Qinx\Qximprint\Domain\Model\Data $data)
	{
			$this->view->assign('data', $data);
	}
}