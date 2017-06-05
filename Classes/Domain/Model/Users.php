<?php
namespace USER\Webuser\Domain\Model;

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
 * Users
 */
class Users extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * firstname
     *
     * @var string
     */
    protected $firstname = '';

    /**
     * lastname
     *
     * @var string
     */
    protected $lastname = '';

    /**
     * email
     *
     * @var string
     */
    protected $email = '';

    /**
     * bio
     *
     * @var string
     */
    protected $bio = '';

    /**
     * dob
     *
     * @var \DateTime
     */
    protected $dob = null;

    /**
     * Returns the firstname
     *
     * @return string $firstname
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Sets the firstname
     *
     * @param string $firstname
     * @return void
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * Returns the lastname
     *
     * @return string $lastname
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Sets the lastname
     *
     * @param string $lastname
     * @return void
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
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
     * Returns the bio
     *
     * @return string $bio
     */
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * Sets the bio
     *
     * @param string $bio
     * @return void
     */
    public function setBio($bio)
    {
        $this->bio = $bio;
    }

    /**
     * Returns the dob
     *
     * @return \DateTime $dob
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Sets the dob
     *
     * @param \DateTime $dob
     * @return void
     */
    public function setDob(\DateTime $dob)
    {
        $this->dob = $dob;
    }
}
