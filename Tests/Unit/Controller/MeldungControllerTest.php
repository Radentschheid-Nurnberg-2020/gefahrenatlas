<?php
namespace Radentscheidnbg2020\Gefahrenatlas\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Matthias Hueber <mhueber@freenet.de>
 * @author Hubertus Golf <technik@radentscheid-nuernberg.de>
 */
class MeldungControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Radentscheidnbg2020\Gefahrenatlas\Controller\MeldungController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Radentscheidnbg2020\Gefahrenatlas\Controller\MeldungController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllMeldungsFromRepositoryAndAssignsThemToView()
    {

        $allMeldungs = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $meldungRepository = $this->getMockBuilder(\Radentscheidnbg2020\Gefahrenatlas\Domain\Repository\MeldungRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $meldungRepository->expects(self::once())->method('findAll')->will(self::returnValue($allMeldungs));
        $this->inject($this->subject, 'meldungRepository', $meldungRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('meldungs', $allMeldungs);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenMeldungToView()
    {
        $meldung = new \Radentscheidnbg2020\Gefahrenatlas\Domain\Model\Meldung();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('meldung', $meldung);

        $this->subject->showAction($meldung);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenMeldungToMeldungRepository()
    {
        $meldung = new \Radentscheidnbg2020\Gefahrenatlas\Domain\Model\Meldung();

        $meldungRepository = $this->getMockBuilder(\Radentscheidnbg2020\Gefahrenatlas\Domain\Repository\MeldungRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $meldungRepository->expects(self::once())->method('add')->with($meldung);
        $this->inject($this->subject, 'meldungRepository', $meldungRepository);

        $this->subject->createAction($meldung);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenMeldungToView()
    {
        $meldung = new \Radentscheidnbg2020\Gefahrenatlas\Domain\Model\Meldung();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('meldung', $meldung);

        $this->subject->editAction($meldung);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenMeldungInMeldungRepository()
    {
        $meldung = new \Radentscheidnbg2020\Gefahrenatlas\Domain\Model\Meldung();

        $meldungRepository = $this->getMockBuilder(\Radentscheidnbg2020\Gefahrenatlas\Domain\Repository\MeldungRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $meldungRepository->expects(self::once())->method('update')->with($meldung);
        $this->inject($this->subject, 'meldungRepository', $meldungRepository);

        $this->subject->updateAction($meldung);
    }
}
