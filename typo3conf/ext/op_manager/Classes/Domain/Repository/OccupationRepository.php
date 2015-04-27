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
 * The repository for Occupations
 */
class OccupationRepository extends \TYPO3\CMS\Extbase\Persistence\Repository {
	
	/**
	 * constraints
	 * 
	 * @var array constraints
	 */
	protected $constraints = NULL;
	
	public function findAll(){
		$query = $this->createQuery();
		$query->setOrderings(array('name' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING));
		if(count($this->constraints['categories'])){
			$categories = array();
			foreach($this->constraints['categories'] as $category){
				$categories[] = $query->contains('categories',$category);
			}
			$query->matching(
				$query->logicalOr($categories)
			);
		}
		return $query->execute();
	}
	
	public function findPrevious($occupation){
		$query = $this->createQuery();
		$statement = 'SELECT DISTINCT tx_opmanager_domain_model_occupation.* FROM tx_opmanager_domain_model_occupation '.$this->getQueryConstraints().' WHERE STRCMP( name,"'.$occupation->getName().'") < 0 '.$GLOBALS['TSFE']->sys_page->enableFields('tx_opmanager_domain_model_occupation', $GLOBALS['TSFE']->showHiddenRecords).' ORDER BY name DESC LIMIT 1';
		return $query->statement($statement)->execute()->current();
	}
	
	public function findNext($occupation){
		$query = $this->createQuery();		
		$statement = 'SELECT DISTINCT tx_opmanager_domain_model_occupation.* FROM tx_opmanager_domain_model_occupation '.$this->getQueryConstraints().' WHERE STRCMP(name,"'.$occupation->getName().'") > 0 '.$GLOBALS['TSFE']->sys_page->enableFields('tx_opmanager_domain_model_occupation', $GLOBALS['TSFE']->showHiddenRecords).' ORDER BY name ASC LIMIT 1';
		return $query->statement($statement)->execute()->current();
	}
	
	public function findListPosition($occupation){
		$query = $this->createQuery();
		$statement = 'SELECT COUNT(DISTINCT tx_opmanager_domain_model_occupation.uid) FROM tx_opmanager_domain_model_occupation '.$this->getQueryConstraints().' WHERE STRCMP(name,"'.$occupation->getName().'") <= 0 '.$GLOBALS['TSFE']->sys_page->enableFields('tx_opmanager_domain_model_occupation', $GLOBALS['TSFE']->showHiddenRecords).' ORDER BY name DESC';
		return current($query->statement($statement)->execute(TRUE));
	}
	
	/**
	 * Returns the constraints
	 * 
	 * @return string
	 */
	public function getQueryConstraints() {
		$constraints = '';
		if(count($this->constraints['categories'])){
			$constraints .= ' INNER JOIN sys_category_record_mm ON
				sys_category_record_mm.tablenames = \'tx_opmanager_domain_model_occupation\' AND 
				sys_category_record_mm.fieldname = \'categories\' AND 
				tx_opmanager_domain_model_occupation.uid = sys_category_record_mm.uid_foreign AND
				sys_category_record_mm.uid_local IN('.implode(',',$this->constraints['categories']).')';
		}
		return $constraints;
	}
	
	/**
	 * Sets the constraints
	 * 
	 * @param array $constraints
	 * @return void
	 */
	public function setConstraints(array $constraints) {
		$this->constraints = $constraints;
	}
	
	/**
	 * Returns the constraints
	 * 
	 * @return array $constraints
	 */
	public function getConstraints() {
		return $this->constraints;
	}
}