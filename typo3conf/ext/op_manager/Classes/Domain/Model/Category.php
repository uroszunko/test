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
 * Category
 */
class Category extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * title
	 * 
	 * @var string
	 * @validate NotEmpty
	 */
	protected $title = '';

	/**
	 * description
	 * 
	 * @var string
	 */
	protected $description = '';

	/**
	 * image
	 * 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
	 * @cascade remove
	 */
	protected $image = NULL;

	/**
	 * __construct
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all ObjectStorage properties
	 * Do not modify this method!
	 * It will be rewritten on each save in the extension builder
	 * You may modify the constructor of this class instead
	 * 
	 * @return void
	 */
	protected function initStorageObjects() {
		$this->image = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the title
	 * 
	 * @return string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 * 
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
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
	 * Adds a FileReference
	 * 
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
	 * @return void
	 */
	public function addImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image) {
		$this->image->attach($image);
	}

	/**
	 * Removes a FileReference
	 * 
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $imageToRemove The FileReference to be removed
	 * @return void
	 */
	public function removeImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $imageToRemove) {
		$this->image->detach($imageToRemove);
	}

	/**
	 * Returns the image
	 * 
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $image
	 */
	public function getImages() {
		return $this->image;
	}

	/**
	 * Sets the image
	 * 
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $image
	 * @return void
	 */
	public function setImages(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $image) {
		$this->image = $image;
	}
	
	/**
	 * Returns the true or false
	 * 
	 * @return boolean
	 */
	public function getChecked() {
		$arguments = \TYPO3\CMS\Core\Utility\GeneralUtility::_GP('tx_opmanager_opmanager');
		if(is_array($arguments) && is_array($arguments['categories']) && in_array($this->getUid(),$arguments['categories'])){
			return TRUE;
		}
		return FALSE;
	}
}