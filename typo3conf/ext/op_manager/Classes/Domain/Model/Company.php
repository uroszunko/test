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
 * Company
 */
class Company extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * listPosition
	 * 
	 * @var integer
	 */
	protected $listPosition = 0;
	
	/**
	 * previousCompany
	 * 
	 * @var \WM\OpManager\Domain\Model\Company 	
	 */
	protected $previous = NULL;
	
	/**
	 * nextCompany
	 * 
	 * @var \WM\OpManager\Domain\Model\Company 	
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
	 * description
	 * 
	 * @var string
	 * @validate NotEmpty
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
	 * logo
	 * 
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $logo = NULL;

	/**
	 * photo
	 * 
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $photo = NULL;

	/**
	 * photoCaption
	 * 
	 * @var string
	 */
	protected $photoCaption = '';

	/**
	 * street
	 * 
	 * @var string
	 * @validate NotEmpty
	 */
	protected $street = '';

	/**
	 * postalCode
	 * 
	 * @var string
	 * @validate NotEmpty
	 */
	protected $postalCode = '';

	/**
	 * city
	 * 
	 * @var string
	 * @validate NotEmpty
	 */
	protected $city = '';

	/**
	 * telephone
	 * 
	 * @var string
	 * @validate NotEmpty
	 */
	protected $telephone = '';

	/**
	 * telephone2
	 * 
	 * @var string
	 */
	protected $telephone2 = '';

	/**
	 * fax
	 * 
	 * @var string
	 * @validate NotEmpty
	 */
	protected $fax = '';

	/**
	 * website
	 * 
	 * @var string
	 */
	protected $website = '';

	/**
	 * email
	 * 
	 * @var string
	 */
	protected $email = '';

	/**
	 * contactPersonName
	 * 
	 * @var string
	 * @validate NotEmpty
	 */
	protected $contactPersonName = '';

	/**
	 * contactPersonTelephone
	 * 
	 * @var string
	 * @validate NotEmpty
	 */
	protected $contactPersonTelephone = '';

	/**
	 * contactPersonEmail
	 * 
	 * @var string
	 * @validate NotEmpty
	 */
	protected $contactPersonEmail = '';

	/**
	 * contactPersonFax
	 * 
	 * @var string
	 * @validate NotEmpty
	 */
	protected $contactPersonFax = '';

	/**
	 * internships
	 * 
	 * @var boolean
	 * @validate NotEmpty
	 */
	protected $internships = FALSE;

	/**
	 * contents
	 * 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<>
	 * @cascade remove
	 * @lazy
	 */
	protected $contents = NULL;

	/**
	 * jobVacancies
	 * 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\WM\OpManager\Domain\Model\JobVacancies>
	 * @cascade remove
	 */
	protected $jobVacancies = NULL;

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
		$this->contents = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->jobVacancies = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

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
	 * Returns the logo
	 * 
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $logo
	 */
	public function getLogo() {
		return $this->logo;
	}

	/**
	 * Sets the logo
	 * 
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $logo
	 * @return void
	 */
	public function setLogo(\TYPO3\CMS\Extbase\Domain\Model\FileReference $logo) {
		$this->logo = $logo;
	}

	/**
	 * Returns the photo
	 * 
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $photo
	 */
	public function getPhoto() {
		return $this->photo;
	}

	/**
	 * Sets the photo
	 * 
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $photo
	 * @return void
	 */
	public function setPhoto(\TYPO3\CMS\Extbase\Domain\Model\FileReference $photo) {
		$this->photo = $photo;
	}

	/**
	 * Returns the photoCaption
	 * 
	 * @return string $photoCaption
	 */
	public function getPhotoCaption() {
		return $this->photoCaption;
	}

	/**
	 * Sets the photoCaption
	 * 
	 * @param string $photoCaption
	 * @return void
	 */
	public function setPhotoCaption($photoCaption) {
		$this->photoCaption = $photoCaption;
	}

	/**
	 * Returns the street
	 * 
	 * @return string $street
	 */
	public function getStreet() {
		return $this->street;
	}

	/**
	 * Sets the street
	 * 
	 * @param string $street
	 * @return void
	 */
	public function setStreet($street) {
		$this->street = $street;
	}

	/**
	 * Returns the postalCode
	 * 
	 * @return string $postalCode
	 */
	public function getPostalCode() {
		return $this->postalCode;
	}

	/**
	 * Sets the postalCode
	 * 
	 * @param string $postalCode
	 * @return void
	 */
	public function setPostalCode($postalCode) {
		$this->postalCode = $postalCode;
	}

	/**
	 * Returns the city
	 * 
	 * @return string $city
	 */
	public function getCity() {
		return $this->city;
	}

	/**
	 * Sets the city
	 * 
	 * @param string $city
	 * @return void
	 */
	public function setCity($city) {
		$this->city = $city;
	}

	/**
	 * Returns the telephone
	 * 
	 * @return string $telephone
	 */
	public function getTelephone() {
		return $this->telephone;
	}

	/**
	 * Sets the telephone
	 * 
	 * @param string $telephone
	 * @return void
	 */
	public function setTelephone($telephone) {
		$this->telephone = $telephone;
	}

	/**
	 * Returns the telephone2
	 * 
	 * @return string $telephone2
	 */
	public function getTelephone2() {
		return $this->telephone2;
	}

	/**
	 * Sets the telephone2
	 * 
	 * @param string $telephone2
	 * @return void
	 */
	public function setTelephone2($telephone2) {
		$this->telephone2 = $telephone2;
	}

	/**
	 * Returns the fax
	 * 
	 * @return string $fax
	 */
	public function getFax() {
		return $this->fax;
	}

	/**
	 * Sets the fax
	 * 
	 * @param string $fax
	 * @return void
	 */
	public function setFax($fax) {
		$this->fax = $fax;
	}

	/**
	 * Returns the website
	 * 
	 * @return string $website
	 */
	public function getWebsite() {
		return $this->website;
	}

	/**
	 * Sets the website
	 * 
	 * @param string $website
	 * @return void
	 */
	public function setWebsite($website) {
		$this->website = $website;
	}

	/**
	 * Returns the email
	 * 
	 * @return string $email
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Sets the email
	 * 
	 * @param string $email
	 * @return void
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

	/**
	 * Returns the contactPersonName
	 * 
	 * @return string $contactPersonName
	 */
	public function getContactPersonName() {
		return $this->contactPersonName;
	}

	/**
	 * Sets the contactPersonName
	 * 
	 * @param string $contactPersonName
	 * @return void
	 */
	public function setContactPersonName($contactPersonName) {
		$this->contactPersonName = $contactPersonName;
	}

	/**
	 * Returns the contactPersonTelephone
	 * 
	 * @return string $contactPersonTelephone
	 */
	public function getContactPersonTelephone() {
		return $this->contactPersonTelephone;
	}

	/**
	 * Sets the contactPersonTelephone
	 * 
	 * @param string $contactPersonTelephone
	 * @return void
	 */
	public function setContactPersonTelephone($contactPersonTelephone) {
		$this->contactPersonTelephone = $contactPersonTelephone;
	}

	/**
	 * Returns the contactPersonEmail
	 * 
	 * @return string $contactPersonEmail
	 */
	public function getContactPersonEmail() {
		return $this->contactPersonEmail;
	}

	/**
	 * Sets the contactPersonEmail
	 * 
	 * @param string $contactPersonEmail
	 * @return void
	 */
	public function setContactPersonEmail($contactPersonEmail) {
		$this->contactPersonEmail = $contactPersonEmail;
	}

	/**
	 * Returns the contactPersonFax
	 * 
	 * @return string $contactPersonFax
	 */
	public function getContactPersonFax() {
		return $this->contactPersonFax;
	}

	/**
	 * Sets the contactPersonFax
	 * 
	 * @param string $contactPersonFax
	 * @return void
	 */
	public function setContactPersonFax($contactPersonFax) {
		$this->contactPersonFax = $contactPersonFax;
	}

	/**
	 * Returns the internships
	 * 
	 * @return boolean $internships
	 */
	public function getInternships() {
		return $this->internships;
	}

	/**
	 * Sets the internships
	 * 
	 * @param boolean $internships
	 * @return void
	 */
	public function setInternships($internships) {
		$this->internships = $internships;
	}

	/**
	 * Returns the boolean state of internships
	 * 
	 * @return boolean
	 */
	public function isInternships() {
		return $this->internships;
	}

	/**
	 * Adds a
	 * 
	 * @param  $content
	 * @return void
	 */
	public function addContent($content) {
		$this->contents->attach($content);
	}

	/**
	 * Removes a
	 * 
	 * @param $contentToRemove The  to be removed
	 * @return void
	 */
	public function removeContent($contentToRemove) {
		$this->contents->detach($contentToRemove);
	}

	/**
	 * Returns the contents
	 * 
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<> $contents
	 */
	public function getContents() {
		return $this->contents;
	}

	/**
	 * Sets the contents
	 * 
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<> $contents
	 * @return void
	 */
	public function setContents(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $contents) {
		$this->contents = $contents;
	}

	/**
	 * Adds a JobVacancies
	 * 
	 * @param \WM\OpManager\Domain\Model\JobVacancies $jobVacancy
	 * @return void
	 */
	public function addJobVacancy(\WM\OpManager\Domain\Model\JobVacancies $jobVacancy) {
		$this->jobVacancies->attach($jobVacancy);
	}

	/**
	 * Removes a JobVacancies
	 * 
	 * @param \WM\OpManager\Domain\Model\JobVacancies $jobVacancyToRemove The JobVacancies to be removed
	 * @return void
	 */
	public function removeJobVacancy(\WM\OpManager\Domain\Model\JobVacancies $jobVacancyToRemove) {
		$this->jobVacancies->detach($jobVacancyToRemove);
	}

	/**
	 * Returns the jobVacancies
	 * 
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\WM\OpManager\Domain\Model\JobVacancies> $jobVacancies
	 */
	public function getJobVacancies() {
		return $this->jobVacancies;
	}

	/**
	 * Sets the jobVacancies
	 * 
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\WM\OpManager\Domain\Model\JobVacancies> $jobVacancies
	 * @return void
	 */
	public function setJobVacancies(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $jobVacancies) {
		$this->jobVacancies = $jobVacancies;
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
	 * Returns the previous company
	 * 
	 * @return \WM\OpManager\Domain\Model\Company $previous
	 */
	public function getPrevious() {
		return $this->previous;
	}
	
	/**
	 * Sets the previous company
	 * 
	 * @param \WM\OpManager\Domain\Model\Company $previous
	 * @return void
	 */
	public function setPrevious(\WM\OpManager\Domain\Model\Company $previous) {
		$this->previous = $previous;
	}
	
	/**
	 * Sets the next company
	 * 
	 * @param \WM\OpManager\Domain\Model\Company $next
	 * @return void
	 */
	public function setNext(\WM\OpManager\Domain\Model\Company $next) {
		$this->next = $next;
	}
	
	/**
	 * Returns the next company
	 * 
	 * @return \WM\OpManager\Domain\Model\Company $next
	 */
	public function getNext() {
		return $this->next;
	}
}