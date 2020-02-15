<?php
namespace Radentscheidnbg2020\Gefahrenatlas\Domain\Model;


/***
 *
 * This file is part of the "Gefahrenatlas" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 Matthias Hueber <mhueber@freenet.de>, ibikenbg
 *           Hubertus Golf <technik@radentscheid-nuernberg.de>, Radentscheid Nürnberg
 *
 ***/
/**
 * Hier werden die Meldungen der Nutzer gespecihert
 */
class Meldung extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * Auswahl einer Kategorie
     * 
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $kategorie = 0;

    /**
     * Breitengrad
     * 
     * @var string
     */
    protected $ortLat = '';

    /**
     * Längengrad
     * 
     * @var string
     */
    protected $ortLon = '';

    /**
     * Zoom-Faktor
     * 
     * @var string
     */
    protected $ortZoom = '';

    /**
     * strasse
     * 
     * @var string
     */
    protected $strasse = '';

    /**
     * Beschreibung der Störung
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $beschreibung = '';

    /**
     * Link zu einem Video
     * 
     * @var string
     */
    protected $video = '';

    /**
     * Bild zur Meldung
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $bild = null;

    /**
     * Email des Users
     * 
     * @var string
     */
    protected $email = '';

    /**
     * Name des Melders
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $melder = '';

    /**
     * Bestättigung der Nutzungsbedingungen
     * 
     * @var bool
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $nutzungsbedingungen = false;

    /**
     * __construct
     */
    public function __construct()
    {

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
    protected function initStorageObjects()
    {
        $this->bild = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the kategorie
     * 
     * @return int $kategorie
     */
    public function getKategorie()
    {
        return $this->kategorie;
    }

    /**
     * Sets the kategorie
     * 
     * @param int $kategorie
     * @return void
     */
    public function setKategorie($kategorie)
    {
        $this->kategorie = $kategorie;
    }

    /**
     * Returns the ortLat
     * 
     * @return string $ortLat
     */
    public function getOrtLat()
    {
        return $this->ortLat;
    }

    /**
     * Sets the ortLat
     * 
     * @param string $ortLat
     * @return void
     */
    public function setOrtLat($ortLat)
    {
        $this->ortLat = $ortLat;
    }

    /**
     * Returns the ortLon
     * 
     * @return string $ortLon
     */
    public function getOrtLon()
    {
        return $this->ortLon;
    }

    /**
     * Sets the ortLon
     * 
     * @param string $ortLon
     * @return void
     */
    public function setOrtLon($ortLon)
    {
        $this->ortLon = $ortLon;
    }

    /**
     * Returns the ortZoom
     * 
     * @return string $ortZoom
     */
    public function getOrtZoom()
    {
        return $this->ortZoom;
    }

    /**
     * Sets the ortZoom
     * 
     * @param string $ortZoom
     * @return void
     */
    public function setOrtZoom($ortZoom)
    {
        $this->ortZoom = $ortZoom;
    }

    /**
     * Returns the strasse
     * 
     * @return string $strasse
     */
    public function getStrasse()
    {
        return $this->strasse;
    }

    /**
     * Sets the strasse
     * 
     * @param string $strasse
     * @return void
     */
    public function setStrasse($strasse)
    {
        $this->strasse = $strasse;
    }

    /**
     * Returns the beschreibung
     * 
     * @return string $beschreibung
     */
    public function getBeschreibung()
    {
        return $this->beschreibung;
    }

    /**
     * Sets the beschreibung
     * 
     * @param string $beschreibung
     * @return void
     */
    public function setBeschreibung($beschreibung)
    {
        $this->beschreibung = $beschreibung;
    }

    /**
     * Returns the video
     * 
     * @return string $video
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * Sets the video
     * 
     * @param string $video
     * @return void
     */
    public function setVideo($video)
    {
        $this->video = $video;
    }

    /**
     * Adds a FileReference
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $bild
     * @return void
     */
    public function addBild(\TYPO3\CMS\Extbase\Domain\Model\FileReference $bild)
    {
        $this->bild->attach($bild);
    }

    /**
     * Removes a FileReference
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $bildToRemove The FileReference to be removed
     * @return void
     */
    public function removeBild(\TYPO3\CMS\Extbase\Domain\Model\FileReference $bildToRemove)
    {
        $this->bild->detach($bildToRemove);
    }

    /**
     * Returns the bild
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $bild
     */
    public function getBild()
    {
        return $this->bild;
    }

    /**
     * Sets the bild
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $bild
     * @return void
     */
    public function setBild(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $bild)
    {
        $this->bild = $bild;
    }

    /**
     * Returns the email
     * 
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the email
     * 
     * @param string $email
     * @return void
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Returns the melder
     * 
     * @return string $melder
     */
    public function getMelder()
    {
        return $this->melder;
    }

    /**
     * Sets the melder
     * 
     * @param string $melder
     * @return void
     */
    public function setMelder($melder)
    {
        $this->melder = $melder;
    }

    /**
     * Returns the nutzungsbedingungen
     * 
     * @return bool $nutzungsbedingungen
     */
    public function getNutzungsbedingungen()
    {
        return $this->nutzungsbedingungen;
    }

    /**
     * Sets the nutzungsbedingungen
     * 
     * @param bool $nutzungsbedingungen
     * @return void
     */
    public function setNutzungsbedingungen($nutzungsbedingungen)
    {
        $this->nutzungsbedingungen = $nutzungsbedingungen;
    }

    /**
     * Returns the boolean state of nutzungsbedingungen
     * 
     * @return bool
     */
    public function isNutzungsbedingungen()
    {
        return $this->nutzungsbedingungen;
    }
}
