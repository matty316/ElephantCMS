<?php
/**
 * Created by PhpStorm.
 * User: reedm
 * Date: 8/6/14
 * Time: 9:29 PM
 */

namespace models;


class User {
    private $username;
    private $email;
    private $password;

    function __construct($username, $email, $password) {
        $this->username = trim($username);
        $this->email = trim($email);
        $this->password = trim($password);
    }

    public function save() {
        // Validation
        if ($this->username == "") {
            return false;
        } elseif ($this->email == "") {
            return false;
        } elseif ($this->password == "") {
            return false;
        } elseif (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        // TODO Save to database
        return true;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public static function find($i) {
        // TODO Implement method
        // Select user where id == $i
    }

    public static function authenticate() {
        // TODO Implement method
        //
    }

} 