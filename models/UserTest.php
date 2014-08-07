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

    function testValidateUsernamePresence() {
        $this->user->setUsername("");
        $this->assertFalse($this->user->save());
    }

    function testValidatePasswordPresence() {
        $this->user->setPassword("");
        $this->assertFalse($this->user->save());
    }

    function testValidateEmailPresence() {
        $this->user->setEmail("");
        $this->assertFalse($this->user->save());
    }

    function testValidateEmailFormat() {
        $this->user->setEmail("email");
        $this->assertFalse($this->user->save());
    }

    function testValidateUsernameFormat() {
        // TODO Implement Test
    }

    function testValidCredentials() {
        $this->assertTrue($this->user->save());
    }

    function tearDown() {
        unset($this->user);
    }
}
 