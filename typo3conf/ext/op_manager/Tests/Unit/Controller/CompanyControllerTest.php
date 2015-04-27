<?php
namespace WM\OpManager\Tests\Unit\Controller;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2015 
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
 * Test case for class WM\OpManager\Controller\CompanyController.
 *
 */
class CompanyControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \WM\OpManager\Controller\CompanyController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('WM\\OpManager\\Controller\\CompanyController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllCompaniesFromRepositoryAndAssignsThemToView() {

		$allCompanies = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$companyRepository = $this->getMock('WM\\OpManager\\Domain\\Repository\\CompanyRepository', array('findAll'), array(), '', FALSE);
		$companyRepository->expects($this->once())->method('findAll')->will($this->returnValue($allCompanies));
		$this->inject($this->subject, 'companyRepository', $companyRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('companies', $allCompanies);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenCompanyToView() {
		$company = new \WM\OpManager\Domain\Model\Company();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('company', $company);

		$this->subject->showAction($company);
	}
}
