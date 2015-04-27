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
 * CompanyController
 */
class CompanyController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * companyRepository
	 * 
	 * @var \WM\OpManager\Domain\Repository\CompanyRepository
	 * @inject
	 */
	protected $companyRepository = NULL;
	
	
	/**
	 * action homepage
	 * 
	 * @return void
	 */
	public function homepageAction() {
		$companies = $this->companyRepository->findAll()->toArray();
		shuffle($companies);
		$this->view->assign('companies', $companies);
	}

	/**
	 * action list
	 * 
	 * @return void
	 */
	public function listAction() {
		$this->view->assign('arguments', $this->getArguments());
		$this->view->assign('companies', $this->companyRepository->findAll());
	}

	/**
	 * action show
	 * 
	 * @param \WM\OpManager\Domain\Model\Company $company
	 * @return void
	 */
	public function showAction(\WM\OpManager\Domain\Model\Company $company) {
		if($previous = $this->companyRepository->findPrevious($company)){
			$company->setPrevious($previous);
		}
		if($listPostion = $this->companyRepository->findListPosition($company)){
			$company->setListPosition(current($listPostion));
		}
		if($next = $this->companyRepository->findNext($company)){
			$company->setNext($next);
		}
		$this->view->assign('arguments', $this->getArguments());
		$this->view->assign('company', $company);
		$this->view->assign('companiesCount', $this->companyRepository->findAll()->count());
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