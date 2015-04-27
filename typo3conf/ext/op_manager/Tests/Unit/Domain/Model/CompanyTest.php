<?php

namespace WM\OpManager\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2015 
 *
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
 * Test case for class \WM\OpManager\Domain\Model\Company.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class CompanyTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \WM\OpManager\Domain\Model\Company
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \WM\OpManager\Domain\Model\Company();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getNameReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getName()
		);
	}

	/**
	 * @test
	 */
	public function setNameForStringSetsName() {
		$this->subject->setName('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'name',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDescriptionReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getDescription()
		);
	}

	/**
	 * @test
	 */
	public function setDescriptionForStringSetsDescription() {
		$this->subject->setDescription('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'description',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDescription2ReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getDescription2()
		);
	}

	/**
	 * @test
	 */
	public function setDescription2ForStringSetsDescription2() {
		$this->subject->setDescription2('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'description2',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDescription3ReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getDescription3()
		);
	}

	/**
	 * @test
	 */
	public function setDescription3ForStringSetsDescription3() {
		$this->subject->setDescription3('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'description3',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getLogoReturnsInitialValueForFileReference() {
		$this->assertEquals(
			NULL,
			$this->subject->getLogo()
		);
	}

	/**
	 * @test
	 */
	public function setLogoForFileReferenceSetsLogo() {
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setLogo($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'logo',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPhotoReturnsInitialValueForFileReference() {
		$this->assertEquals(
			NULL,
			$this->subject->getPhoto()
		);
	}

	/**
	 * @test
	 */
	public function setPhotoForFileReferenceSetsPhoto() {
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setPhoto($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'photo',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPhotoCaptionReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getPhotoCaption()
		);
	}

	/**
	 * @test
	 */
	public function setPhotoCaptionForStringSetsPhotoCaption() {
		$this->subject->setPhotoCaption('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'photoCaption',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getStreetReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getStreet()
		);
	}

	/**
	 * @test
	 */
	public function setStreetForStringSetsStreet() {
		$this->subject->setStreet('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'street',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPostalCodeReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getPostalCode()
		);
	}

	/**
	 * @test
	 */
	public function setPostalCodeForStringSetsPostalCode() {
		$this->subject->setPostalCode('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'postalCode',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCityReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getCity()
		);
	}

	/**
	 * @test
	 */
	public function setCityForStringSetsCity() {
		$this->subject->setCity('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'city',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTelephoneReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTelephone()
		);
	}

	/**
	 * @test
	 */
	public function setTelephoneForStringSetsTelephone() {
		$this->subject->setTelephone('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'telephone',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTelephone2ReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTelephone2()
		);
	}

	/**
	 * @test
	 */
	public function setTelephone2ForStringSetsTelephone2() {
		$this->subject->setTelephone2('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'telephone2',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getFaxReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getFax()
		);
	}

	/**
	 * @test
	 */
	public function setFaxForStringSetsFax() {
		$this->subject->setFax('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'fax',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getWebsiteReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getWebsite()
		);
	}

	/**
	 * @test
	 */
	public function setWebsiteForStringSetsWebsite() {
		$this->subject->setWebsite('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'website',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getEmailReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getEmail()
		);
	}

	/**
	 * @test
	 */
	public function setEmailForStringSetsEmail() {
		$this->subject->setEmail('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'email',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getContactPersonNameReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getContactPersonName()
		);
	}

	/**
	 * @test
	 */
	public function setContactPersonNameForStringSetsContactPersonName() {
		$this->subject->setContactPersonName('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'contactPersonName',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getContactPersonTelephoneReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getContactPersonTelephone()
		);
	}

	/**
	 * @test
	 */
	public function setContactPersonTelephoneForStringSetsContactPersonTelephone() {
		$this->subject->setContactPersonTelephone('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'contactPersonTelephone',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getContactPersonEmailReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getContactPersonEmail()
		);
	}

	/**
	 * @test
	 */
	public function setContactPersonEmailForStringSetsContactPersonEmail() {
		$this->subject->setContactPersonEmail('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'contactPersonEmail',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getContactPersonFaxReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getContactPersonFax()
		);
	}

	/**
	 * @test
	 */
	public function setContactPersonFaxForStringSetsContactPersonFax() {
		$this->subject->setContactPersonFax('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'contactPersonFax',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getInternshipsReturnsInitialValueForBoolean() {
		$this->assertSame(
			FALSE,
			$this->subject->getInternships()
		);
	}

	/**
	 * @test
	 */
	public function setInternshipsForBooleanSetsInternships() {
		$this->subject->setInternships(TRUE);

		$this->assertAttributeEquals(
			TRUE,
			'internships',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getContentsReturnsInitialValueFor() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getContents()
		);
	}

	/**
	 * @test
	 */
	public function setContentsForObjectStorageContainingSetsContents() {
		$content = new ();
		$objectStorageHoldingExactlyOneContents = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneContents->attach($content);
		$this->subject->setContents($objectStorageHoldingExactlyOneContents);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneContents,
			'contents',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addContentToObjectStorageHoldingContents() {
		$content = new ();
		$contentsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$contentsObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($content));
		$this->inject($this->subject, 'contents', $contentsObjectStorageMock);

		$this->subject->addContent($content);
	}

	/**
	 * @test
	 */
	public function removeContentFromObjectStorageHoldingContents() {
		$content = new ();
		$contentsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$contentsObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($content));
		$this->inject($this->subject, 'contents', $contentsObjectStorageMock);

		$this->subject->removeContent($content);

	}

	/**
	 * @test
	 */
	public function getJobVacanciesReturnsInitialValueForJobVacancies() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getJobVacancies()
		);
	}

	/**
	 * @test
	 */
	public function setJobVacanciesForObjectStorageContainingJobVacanciesSetsJobVacancies() {
		$jobVacancy = new \WM\OpManager\Domain\Model\JobVacancies();
		$objectStorageHoldingExactlyOneJobVacancies = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneJobVacancies->attach($jobVacancy);
		$this->subject->setJobVacancies($objectStorageHoldingExactlyOneJobVacancies);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneJobVacancies,
			'jobVacancies',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addJobVacancyToObjectStorageHoldingJobVacancies() {
		$jobVacancy = new \WM\OpManager\Domain\Model\JobVacancies();
		$jobVacanciesObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$jobVacanciesObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($jobVacancy));
		$this->inject($this->subject, 'jobVacancies', $jobVacanciesObjectStorageMock);

		$this->subject->addJobVacancy($jobVacancy);
	}

	/**
	 * @test
	 */
	public function removeJobVacancyFromObjectStorageHoldingJobVacancies() {
		$jobVacancy = new \WM\OpManager\Domain\Model\JobVacancies();
		$jobVacanciesObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$jobVacanciesObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($jobVacancy));
		$this->inject($this->subject, 'jobVacancies', $jobVacanciesObjectStorageMock);

		$this->subject->removeJobVacancy($jobVacancy);

	}
}
