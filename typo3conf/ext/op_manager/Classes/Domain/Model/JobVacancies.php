<?php
namespace WM\OpManager\Domain\Model;


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
 * JobVacancies
 */
class JobVacancies extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * vacancies
	 * 
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $vacancies = 0;

	/**
	 * occupation
	 * 
	 * @var \WM\OpManager\Domain\Model\Occupation
	 * @lazy
	 */
	protected $occupation = NULL;

	/**
	 * Returns the vacancies
	 * 
	 * @return integer $vacancies
	 */
	public function getVacancies() {
		return $this->vacancies;
	}

	/**
	 * Sets the vacancies
	 * 
	 * @param integer $vacancies
	 * @return void
	 */
	public function setVacancies($vacancies) {
		$this->vacancies = $vacancies;
	}

	/**
	 * Returns the occupation
	 * 
	 * @return \WM\OpManager\Domain\Model\Occupation $occupation
	 */
	public function getOccupation() {
		return $this->occupation;
	}

	/**
	 * Sets the occupation
	 * 
	 * @param \WM\OpManager\Domain\Model\Occupation $occupation
	 * @return void
	 */
	public function setOccupation(\WM\OpManager\Domain\Model\Occupation $occupation) {
		$this->occupation = $occupation;
	}

}