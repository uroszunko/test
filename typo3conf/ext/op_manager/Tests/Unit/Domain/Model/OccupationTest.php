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
 * Test case for class \WM\OpManager\Domain\Model\Occupation.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class OccupationTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \WM\OpManager\Domain\Model\Occupation
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \WM\OpManager\Domain\Model\Occupation();
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
	public function getImageReturnsInitialValueForFileReference() {
		$this->assertEquals(
			NULL,
			$this->subject->getImage()
		);
	}

	/**
	 * @test
	 */
	public function setImageForFileReferenceSetsImage() {
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setImage($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'image',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getImageCaptionReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getImageCaption()
		);
	}

	/**
	 * @test
	 */
	public function setImageCaptionForStringSetsImageCaption() {
		$this->subject->setImageCaption('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'imageCaption',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getIntroductionReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getIntroduction()
		);
	}

	/**
	 * @test
	 */
	public function setIntroductionForStringSetsIntroduction() {
		$this->subject->setIntroduction('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'introduction',
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
	public function getRatingReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getRating()
		);
	}

	/**
	 * @test
	 */
	public function setRatingForIntegerSetsRating() {
		$this->subject->setRating(12);

		$this->assertAttributeEquals(
			12,
			'rating',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getOpportunitiesReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getOpportunities()
		);
	}

	/**
	 * @test
	 */
	public function setOpportunitiesForStringSetsOpportunities() {
		$this->subject->setOpportunities('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'opportunities',
			$this->subject
		);
	}
}
