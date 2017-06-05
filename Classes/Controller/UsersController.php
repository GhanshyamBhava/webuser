<?php
namespace USER\Webuser\Controller;

/***
 *
 * This file is part of the "Web Users" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017
 *
 ***/

/**
 * UsersController
 */
class UsersController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * usersRepository
     *
     * @var \USER\Webuser\Domain\Repository\UsersRepository
     * @inject
     */
    protected $usersRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $users = $this->usersRepository->findAll();
        $this->view->assign('users', $users);
    }

    /**
     * action show
     *
     * @param \USER\Webuser\Domain\Model\Users $users
     * @return void
     */
    public function showAction(\USER\Webuser\Domain\Model\Users $users)
    {
        $this->view->assign('users', $users);
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
    * @return void
    */
    public function initializeCreateAction() {
        if (isset($this->arguments['newUsers'])) {
            $this->arguments['newUsers']
                ->getPropertyMappingConfiguration()
                ->forProperty('dob')
                ->setTypeConverterOption('TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\DateTimeConverter', \TYPO3\CMS\Extbase\Property\TypeConverter\DateTimeConverter::CONFIGURATION_DATE_FORMAT, 'd-m-Y');
        }

    }

    /**
     * action create
     *
     * @param \USER\Webuser\Domain\Model\Users $newUsers
     * @return void
     */
    public function createAction(\USER\Webuser\Domain\Model\Users $newUsers)
    {
        $this->addFlashMessage('Record has been added!', 'Success!', \TYPO3\CMS\Core\Messaging\AbstractMessage::OK);
        $this->usersRepository->add($newUsers);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \USER\Webuser\Domain\Model\Users $users
     * @ignorevalidation $users
     * @return void
     */
    public function editAction(\USER\Webuser\Domain\Model\Users $users)
    {
        $this->view->assign('users', $users);
    }

    /**
    * @return void
    */
    public function initializeUpdateAction() {
        if (isset($this->arguments['users'])) {
            $this->arguments['users']
                ->getPropertyMappingConfiguration()
                ->forProperty('dob')
                ->setTypeConverterOption('TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\DateTimeConverter', \TYPO3\CMS\Extbase\Property\TypeConverter\DateTimeConverter::CONFIGURATION_DATE_FORMAT, 'd-m-Y');
        }
    }

    /**
     * action update
     *
     * @param \USER\Webuser\Domain\Model\Users $users
     * @return void
     */
    public function updateAction(\USER\Webuser\Domain\Model\Users $users)
    {
        $this->addFlashMessage('Record has been updated', 'Updated!', \TYPO3\CMS\Core\Messaging\AbstractMessage::OK);
        $this->usersRepository->update($users);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \USER\Webuser\Domain\Model\Users $users
     * @return void
     */
    public function deleteAction(\USER\Webuser\Domain\Model\Users $users)
    {
        $this->addFlashMessage('Record has been deleted.', 'Deleted!', \TYPO3\CMS\Core\Messaging\AbstractMessage::OK);
        $this->usersRepository->remove($users);
        $this->redirect('list');
    }
}
