<?php
namespace Radentscheidnbg2020\Gefahrenatlas\Controller;


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
 * MeldungController
 */
class MeldungController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * meldungRepository
     * 
     * @var \Radentscheidnbg2020\Gefahrenatlas\Domain\Repository\MeldungRepository
     * @TYPO3\\CMS\\Extbase\\Annotation\\Inject
     */
    protected $meldungRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $meldungs = $this->meldungRepository->findAll();
        $this->view->assign('meldungs', $meldungs);
    }

    /**
     * action show
     * 
     * @param \Radentscheidnbg2020\Gefahrenatlas\Domain\Model\Meldung $meldung
     * @return void
     */
    public function showAction(\Radentscheidnbg2020\Gefahrenatlas\Domain\Model\Meldung $meldung)
    {
        $this->view->assign('meldung', $meldung);
    }

    /**
     * action new
     * 
     * @return void
     */
    public function newAction()
    {
    }

    /**
     * action create
     * 
     * @param \Radentscheidnbg2020\Gefahrenatlas\Domain\Model\Meldung $newMeldung
     * @return void
     */
    public function createAction(\Radentscheidnbg2020\Gefahrenatlas\Domain\Model\Meldung $newMeldung)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->meldungRepository->add($newMeldung);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \Radentscheidnbg2020\Gefahrenatlas\Domain\Model\Meldung $meldung
     * @TYPO3\\CMS\\Extbase\\Annotation\\IgnoreValidation $meldung
     * @return void
     */
    public function editAction(\Radentscheidnbg2020\Gefahrenatlas\Domain\Model\Meldung $meldung)
    {
        $this->view->assign('meldung', $meldung);
    }

    /**
     * action update
     * 
     * @param \Radentscheidnbg2020\Gefahrenatlas\Domain\Model\Meldung $meldung
     * @return void
     */
    public function updateAction(\Radentscheidnbg2020\Gefahrenatlas\Domain\Model\Meldung $meldung)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->meldungRepository->update($meldung);
        $this->redirect('list');
    }
}
