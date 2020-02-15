<?php
namespace Radentscheidnbg2020\Gefahrenatlas\Domain\Repository;


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
 * The repository for Meldungs
 */
class MeldungRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{

    /**
     * @var array
     */
    protected $defaultOrderings = ['sorting' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING];
}
