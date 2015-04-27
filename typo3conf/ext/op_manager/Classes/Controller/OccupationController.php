<?php
namespace WM\OpManager\Controller;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015
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
 * OccupationController
 */
class OccupationController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * occupationRepository
	 * 
	 * @var \WM\OpManager\Domain\Repository\OccupationRepository
	 * @inject
	 */
	protected $occupationRepository = NULL;
	
	/**
	 * action initialize
	 * 
	 * @return void
	 */
	public function initializeAction() {
		$this->occupationRepository->setConstraints($this->getArguments());
	}
	
	/**
	 * action list
	 * 
	 * @return void
	 */
	public function listAction() {
		$this->view->assign('arguments', $this->getArguments());
		$this->view->assign('occupations', $this->occupationRepository->findAll());
	}

	/**
	 * action show
	 * 
	 * @param \WM\OpManager\Domain\Model\Occupation $occupation
	 * @return void
	 */
	public function showAction(\WM\OpManager\Domain\Model\Occupation $occupation) {
		if($previous = $this->occupationRepository->findPrevious($occupation)){
			$occupation->setPrevious($previous);
		}
		if($listPostion = $this->occupationRepository->findListPosition($occupation)){
			$occupation->setListPosition(current($listPostion));
		}
		if($next = $this->occupationRepository->findNext($occupation)){
			$occupation->setNext($next);
		}
		$this->view->assign('arguments', $this->getArguments());
		$this->view->assign('occupation', $occupation);
		$this->view->assign('occupationsCount', $this->occupationRepository->findAll()->count());
	}
	
	protected function getArguments(){
		$arguments = $this->request->getArguments();
		if(is_array($arguments)){
			if(!is_array($arguments['categories'])){
				$arguments['categories'] = array();
			}
		}else{
			$arguments = array(
				'categories' => array()
			);
		}
		return $arguments;
	}
}