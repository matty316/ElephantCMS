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
    private $message;

    function __construct($username, $email, $password) {
        $this->username = trim($username);
        $this->email = trim($email);
        $this->password = trim($password);
    }

    public function save() {
        // Validation
        if ($this->username == "") {
            $this->message = "Please enter a username.";
            return false;
        } elseif ($this->email == "") {
            $this->message = "Please enter an email.";
            return false;
        } elseif ($this->password == "") {
            $this->message = "Please enter a password.";
            return false;
        } elseif (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $this->message = "Please enter a valid email.";
            return false;
        } elseif (preg_match("/^[a-zA-Z0-9_-]{3,16}$/", $this->username) === 0) {
            $this->message = "A username can consist of letters, numbers, dashes and underscores.";
            return false;
        } elseif ($this->emailUnique()) {

        } elseif ($this->usernameUnique()) {

        } else {
            // TODO Save to database
            $this->message = "Account Created!";
            return true;
        }


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

    public function getMessage() {
        return $this->message;
    }

    public static function find($i) {
        // TODO Implement method
        // Select user where id == $i
    }

    public static function authenticate() {
        // TODO Implement method
        //
    }

    private function emailUnique()
    {
        // TODO Dat implementation
    }

    private function usernameUnique()
    {
        // TODO Thotwalk
    }

} 