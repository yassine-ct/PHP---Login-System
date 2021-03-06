<?php

class RegisterController extends Register{

    private $username;
    private $email;
    private $password;
    private $passwordRepeat;

    public function __construct($username, $email, $password, $passwordRepeat) {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->passwordRepeat = $passwordRepeat;
    }

    public function RegisterUser() {
        if($this->emptyInput() == false) {
            header("location: ./../index.php?error=emptyInput");
            exit();
        }

        if($this->invalidUsername() == false) {
            header("location: ./../index.php?error=InvalidUsername");
            exit();
        }

        if($this->invalidEmail() == false) {
            header("location: ./../index.php?error=InvalidEmail");
            exit();
        }

        if($this->passwordMatch() == false) {
            header("location: ./../index.php?error=passwordMatch");
            exit();
        }

        if($this->usernameTakenCheck() == false) {
            header("location: ./../index.php?error=usernameOrEmailTaken");
            exit();
        }

        $this->setUser($this->username, $this->password, $this->email);
    }

    private function emptyInput() {
        $result = true;

        if(empty($this->username) || empty($this->email) || empty($this->password) || empty($this->passwordRepeat) ) {
                $result = false;
        }
        else {
                $result = true;
        }

        return $result;
    }

    private function invalidUsername() {
        $result = true;

        if(!preg_match('/^[a-zA-Z0-9]*$/', $this->username)) {
            $result = false;
        }
        else {
            $result = true;
        }

        return $result;
    }

    private function invalidEmail() {
        $result = true;

        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        }
        else {
            $result = true;
        }

        return $result;
    }

    private function passwordMatch() {
        $result = true;
        if($this->password !== $this->passwordRepeat) {
            $result = false;
        }
        else {
            $result = true;
        }

        return $result;
    }

    private function usernameTakenCheck() {
        $result = true;
        if(!$this->checkUser($this->username, $this->email)) {
            $result = false;
        }
        else {
            $result = true;
        }

        return $result;
    }
}