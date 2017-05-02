<?php
namespace USER\Webuser\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class UsersTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \USER\Webuser\Domain\Model\Users
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \USER\Webuser\Domain\Model\Users();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getFirstnameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getFirstname()
        );

    }

    /**
     * @test
     */
    public function setFirstnameForStringSetsFirstname()
    {
        $this->subject->setFirstname('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'firstname',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getLastnameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLastname()
        );

    }

    /**
     * @test
     */
    public function setLastnameForStringSetsLastname()
    {
        $this->subject->setLastname('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'lastname',
            $this->subject
        );

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
    public function getBioReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBio()
        );

    }

    /**
     * @test
     */
    public function setBioForStringSetsBio()
    {
        $this->subject->setBio('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'bio',
            $this->subject
        );

    }
}
