<?php
namespace WM\OpManager\Domain\Repository;


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
 * The repository for Companies
 */
class CompanyRepository extends \TYPO3\CMS\Extbase\Persistence\Repository {

	public function findAll(){
		$query = $this->createQuery();
		$query->setOrderings(array('name' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING));
		return $query->execute();
	}
	
	public function findPrevious($company){
		$query = $this->createQuery();
		$statement = 'SELECT * FROM tx_opmanager_domain_model_company WHERE STRCMP( name,"'.$company->getName().'") < 0 '.$GLOBALS['TSFE']->sys_page->enableFields('tx_opmanager_domain_model_company', $GLOBALS['TSFE']->showHiddenRecords).' ORDER BY name DESC LIMIT 1';
		return $query->statement($statement)->execute()->current();
	}
	
	public function findNext($company){
		$query = $this->createQuery();		
		$statement = 'SELECT * FROM tx_opmanager_domain_model_company WHERE STRCMP(name,"'.$company->getName().'") > 0 '.$GLOBALS['TSFE']->sys_page->enableFields('tx_opmanager_domain_model_company', $GLOBALS['TSFE']->showHiddenRecords).' ORDER BY name ASC LIMIT 1';
		return $query->statement($statement)->execute()->current();
	}
	
	public function findListPosition($company){
		$query = $this->createQuery();
		$statement = 'SELECT COUNT(uid) FROM tx_opmanager_domain_model_company WHERE STRCMP(name,"'.$company->getName().'") <= 0 '.$GLOBALS['TSFE']->sys_page->enableFields('tx_opmanager_domain_model_company', $GLOBALS['TSFE']->showHiddenRecords).' ORDER BY name DESC';
		return current($query->statement($statement)->execute(TRUE));
	}
}