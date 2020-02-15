<?php
namespace Radentscheidnbg2020\Gefahrenatlas\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Matthias Hueber <mhueber@freenet.de>
 * @author Hubertus Golf <technik@radentscheid-nuernberg.de>
 */
class MeldungTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Radentscheidnbg2020\Gefahrenatlas\Domain\Model\Meldung
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Radentscheidnbg2020\Gefahrenatlas\Domain\Model\Meldung();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getKategorieReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getKategorie()
        );
    }

    /**
     * @test
     */
    public function setKategorieForIntSetsKategorie()
    {
        $this->subject->setKategorie(12);

        self::assertAttributeEquals(
            12,
            'kategorie',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getOrtLatReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getOrtLat()
        );
    }

    /**
     * @test
     */
    public function setOrtLatForStringSetsOrtLat()
    {
        $this->subject->setOrtLat('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'ortLat',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getOrtLonReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getOrtLon()
        );
    }

    /**
     * @test
     */
    public function setOrtLonForStringSetsOrtLon()
    {
        $this->subject->setOrtLon('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'ortLon',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getOrtZoomReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getOrtZoom()
        );
    }

    /**
     * @test
     */
    public function setOrtZoomForStringSetsOrtZoom()
    {
        $this->subject->setOrtZoom('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'ortZoom',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getStrasseReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getStrasse()
        );
    }

    /**
     * @test
     */
    public function setStrasseForStringSetsStrasse()
    {
        $this->subject->setStrasse('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'strasse',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBeschreibungReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBeschreibung()
        );
    }

    /**
     * @test
     */
    public function setBeschreibungForStringSetsBeschreibung()
    {
        $this->subject->setBeschreibung('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'beschreibung',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getVideoReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getVideo()
        );
    }

    /**
     * @test
     */
    public function setVideoForStringSetsVideo()
    {
        $this->subject->setVideo('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'video',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBildReturnsInitialValueForFileReference()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getBild()
        );
    }

    /**
     * @test
     */
    public function setBildForFileReferenceSetsBild()
    {
        $bild = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $objectStorageHoldingExactlyOneBild = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneBild->attach($bild);
        $this->subject->setBild($objectStorageHoldingExactlyOneBild);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneBild,
            'bild',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addBildToObjectStorageHoldingBild()
    {
        $bild = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $bildObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $bildObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($bild));
        $this->inject($this->subject, 'bild', $bildObjectStorageMock);

        $this->subject->addBild($bild);
    }

    /**
     * @test
     */
    public function removeBildFromObjectStorageHoldingBild()
    {
        $bild = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $bildObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $bildObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($bild));
        $this->inject($this->subject, 'bild', $bildObjectStorageMock);

        $this->subject->removeBild($bild);
    }

    /**
     * @test
     */
    public function getEmailReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEmail()
        );
    }

    /**
     * @test
     */
    public function setEmailForStringSetsEmail()
    {
        $this->subject->setEmail('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'email',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMelderReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getMelder()
        );
    }

    /**
     * @test
     */
    public function setMelderForStringSetsMelder()
    {
        $this->subject->setMelder('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'melder',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getNutzungsbedingungenReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getNutzungsbedingungen()
        );
    }

    /**
     * @test
     */
    public function setNutzungsbedingungenForBoolSetsNutzungsbedingungen()
    {
        $this->subject->setNutzungsbedingungen(true);

        self::assertAttributeEquals(
            true,
            'nutzungsbedingungen',
            $this->subject
        );
    }
}
