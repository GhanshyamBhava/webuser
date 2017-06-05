<?php
namespace USER\Webuser\Tests\Unit\Controller;

/**
 * Test case.
 */
class UsersControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \USER\Webuser\Controller\UsersController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\USER\Webuser\Controller\UsersController::class)
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
    public function listActionFetchesAllUserssFromRepositoryAndAssignsThemToView()
    {

        $allUserss = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $usersRepository = $this->getMockBuilder(\USER\Webuser\Domain\Repository\UsersRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $usersRepository->expects(self::once())->method('findAll')->will(self::returnValue($allUserss));
        $this->inject($this->subject, 'usersRepository', $usersRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('userss', $allUserss);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenUsersToView()
    {
        $users = new \USER\Webuser\Domain\Model\Users();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('users', $users);

        $this->subject->showAction($users);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenUsersToUsersRepository()
    {
        $users = new \USER\Webuser\Domain\Model\Users();

        $usersRepository = $this->getMockBuilder(\USER\Webuser\Domain\Repository\UsersRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $usersRepository->expects(self::once())->method('add')->with($users);
        $this->inject($this->subject, 'usersRepository', $usersRepository);

        $this->subject->createAction($users);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenUsersToView()
    {
        $users = new \USER\Webuser\Domain\Model\Users();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('users', $users);

        $this->subject->editAction($users);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenUsersInUsersRepository()
    {
        $users = new \USER\Webuser\Domain\Model\Users();

        $usersRepository = $this->getMockBuilder(\USER\Webuser\Domain\Repository\UsersRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $usersRepository->expects(self::once())->method('update')->with($users);
        $this->inject($this->subject, 'usersRepository', $usersRepository);

        $this->subject->updateAction($users);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenUsersFromUsersRepository()
    {
        $users = new \USER\Webuser\Domain\Model\Users();

        $usersRepository = $this->getMockBuilder(\USER\Webuser\Domain\Repository\UsersRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $usersRepository->expects(self::once())->method('remove')->with($users);
        $this->inject($this->subject, 'usersRepository', $usersRepository);

        $this->subject->deleteAction($users);
    }
}
