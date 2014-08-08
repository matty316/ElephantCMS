<?php
/**
 * Created by PhpStorm.
 * User: reedm
 * Date: 8/6/14
 * Time: 9:37 PM
 */

require "../models/User.php";
use models\User;

class UserTest extends \PHPUnit_Framework_TestCase {
    private $user;

    function setUp() {
        $this->user = new User("matt", "email@email.com", "password");
    }

    function testUserCreate() {
        $this->assertTrue(isset($this->user));
    }

    function testValidCredentials() {
        $this->assertTrue($this->user->save());
        $this->assertEquals("Account Created!", $this->user->getMessage());
    }

    function testValidateUsernamePresence() {
        $this->user->setUsername("");
        $this->assertFalse($this->user->save());
        $this->assertEquals("Please enter a username.", $this->user->getMessage());
    }

    function testValidatePasswordPresence() {
        $this->user->setPassword("");
        $this->assertFalse($this->user->save());
        $this->assertEquals("Please enter a password.", $this->user->getMessage());
    }

    function testValidateEmailPresence() {
        $this->user->setEmail("");
        $this->assertFalse($this->user->save());
        $this->assertEquals("Please enter an email.", $this->user->getMessage());
    }

    function testValidateEmailFormat() {
        $this->user->setEmail("email");
        $this->assertFalse($this->user->save());
        $this->assertEquals("Please enter a valid email.", $this->user->getMEssage());
    }

    function testValidateUsernameFormat() {
        $this->user->setUsername("matt reed");
        $this->assertFalse($this->user->save());
        $this->assertEquals("A username can consist of letters, numbers, dashes and underscores.", $this->user->getMessage());
    }

    function testValidWithUppercaseUsername() {
        // TODO Implement
    }

    function testValidWithUppercaseEmail() {
        // TODO Implement this boi
    }

    function testEmailUniqueness(){
        // TODO get dat yung test
    }

    function testUsernameUniqueness() {
        // TODO implement that ass
    }

    function tearDown() {
        unset($this->user);
    }
}
 