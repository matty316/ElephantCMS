<?php
/**
 * Created by PhpStorm.
 * User: reedm
 * Date: 8/6/14
 * Time: 9:37 PM
 */

namespace models;
require "User.php";

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
        $this->assertEquals("Account Created!", $this->user->getMEssage());
    }

    function testValidateUsernamePresence() {
        $this->user->setUsername("");
        $this->assertFalse($this->user->save());
        $this->assertEquals("Please enter a username.", $this->user->getMEssage());
    }

    function testValidatePasswordPresence() {
        $this->user->setPassword("");
        $this->assertFalse($this->user->save());
        $this->assertEquals("Please enter a password.", $this->user->getMEssage());
    }

    function testValidateEmailPresence() {
        $this->user->setEmail("");
        $this->assertFalse($this->user->save());
        $this->assertEquals("Please enter an email.", $this->user->getMEssage());
    }

    function testValidateEmailFormat() {
        $this->user->setEmail("email");
        $this->assertFalse($this->user->save());
        $this->assertEquals("Please enter a valid email.", $this->user->getMEssage());
    }

    function testValidateUsernameFormat() {
        $this->user->setUsername("matt reed");
        $this->assertFalse($this->user->save());
        $this->assertEquals("A username can consist of letters, numbers, dashes and underscores.", $this->user->getMEssage());
    }



    function tearDown() {
        unset($this->user);
    }
}
 