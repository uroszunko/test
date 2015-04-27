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
 * Occupation
 */
class Occupation extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {
	
	/**
	 * listPosition
	 * 
	 * @var integer
	 */
	protected $listPosition = 0;
	
	/**
	 * previousOccupation
	 * 
	 * @var \WM\OpManager\Domain\Model\Occupation 	
	 */
	protected $previous = NULL;
	
	/**
	 * nextOccupation
	 * 
	 * @var \WM\OpManager\Domain\Model\Occupation 	
	 */
	protected $next = NULL;
	
	/**
	 * name
	 * 
	 * @var string
	 * @validate NotEmpty
	 */
	protected $name = '';

	/**
	 * image
	 * 
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $image = NULL;

	/**
	 * imageCaption
	 * 
	 * @var string
	 */
	protected $imageCaption = '';

	/**
	 * introduction
	 * 
	 * @var string
	 * @validate NotEmpty
	 */
	protected $introduction = '';

	/**
	 * description
	 * 
	 * @var string
	 */
	protected $description = '';

	/**
	 * description2
	 * 
	 * @var string
	 */
	protected $description2 = '';

	/**
	 * description3
	 * 
	 * @var string
	 */
	protected $description3 = '';

	/**
	 * rating
	 * 
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $rating = 0;

	/**
	 * opportunities
	 * 
	 * @var string
	 * @validate NotEmpty
	 */
	protected $opportunities = '';

	/**
	 * Returns the name
	 * 
	 * @return string $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets the name
	 * 
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Returns the image
	 * 
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
	 */
	public function getImage() {
		return $this->image;
	}

	/**
	 * Sets the image
	 * 
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
	 * @return void
	 */
	public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image) {
		$this->image = $image;
	}

	/**
	 * Returns the imageCaption
	 * 
	 * @return string $imageCaption
	 */
	public function getImageCaption() {
		return $this->imageCaption;
	}

	/**
	 * Sets the imageCaption
	 * 
	 * @param string $imageCaption
	 * @return void
	 */
	public function setImageCaption($imageCaption) {
		$this->imageCaption = $imageCaption;
	}

	/**
	 * Returns the introduction
	 * 
	 * @return string $introduction
	 */
	public function getIntroduction() {
		return $this->introduction;
	}

	/**
	 * Sets the introduction
	 * 
	 * @param string $introduction
	 * @return void
	 */
	public function setIntroduction($introduction) {
		$this->introduction = $introduction;
	}

	/**
	 * Returns the description
	 * 
	 * @return string $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets the description
	 * 
	 * @param string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Returns the description2
	 * 
	 * @return string $description2
	 */
	public function getDescription2() {
		return $this->description2;
	}

	/**
	 * Sets the description2
	 * 
	 * @param string $description2
	 * @return void
	 */
	public function setDescription2($description2) {
		$this->description2 = $description2;
	}

	/**
	 * Returns the description3
	 * 
	 * @return string $description3
	 */
	public function getDescription3() {
		return $this->description3;
	}

	/**
	 * Sets the description3
	 * 
	 * @param string $description3
	 * @return void
	 */
	public function setDescription3($description3) {
		$this->description3 = $description3;
	}

	/**
	 * Returns the rating
	 * 
	 * @return integer $rating
	 */
	public function getRating() {
		return $this->rating;
	}

	/**
	 * Sets the rating
	 * 
	 * @param integer $rating
	 * @return void
	 */
	public function setRating($rating) {
		$this->rating = $rating;
	}

	/**
	 * Returns the opportunities
	 * 
	 * @return string $opportunities
	 */
	public function getOpportunities() {
		return $this->opportunities;
	}

	/**
	 * Sets the opportunities
	 * 
	 * @param string $opportunities
	 * @return void
	 */
	public function setOpportunities($opportunities) {
		$this->opportunities = $opportunities;
	}
	
	/**
	 * Sets the current list index position
	 * 
	 * @param integer $listPosition
	 * @return void
	 */
	public function setListPosition($listPosition){
		$this->listPosition = (int)$listPosition;
	}
	
	/**
	 * Returns the current list index position
	 * 
	 * @return integer $listPosition
	 */
	public function getListPosition(){
		return $this->listPosition;
	}
	
	/**
	 * Returns the previous occupation
	 * 
	 * @return \WM\OpManager\Domain\Model\Occupation $previous
	 */
	public function getPrevious() {
		return $this->previous;
	}
	
	/**
	 * Sets the previous occupation
	 * 
	 * @param \WM\OpManager\Domain\Model\Occupation $previous
	 * @return void
	 */
	public function setPrevious(\WM\OpManager\Domain\Model\Occupation $previous) {
		$this->previous = $previous;
	}
	
	/**
	 * Sets the next occupation
	 * 
	 * @param \WM\OpManager\Domain\Model\Occupation $next
	 * @return void
	 */
	public function setNext(\WM\OpManager\Domain\Model\Occupation $next) {
		$this->next = $next;
	}
	
	/**
	 * Returns the next occupation
	 * 
	 * @return \WM\OpManager\Domain\Model\Occupation $next
	 */
	public function getNext() {
		return $this->next;
	}
}