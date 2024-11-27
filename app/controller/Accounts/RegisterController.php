<?php 
    require_once('../../model/Accounts/RegisterModel.php');

    // Change something inside the database
    class SignupContr extends RegisterModel {
        
        // Properties
        private $username; 
        private $email; 
        private $password; 
        private $rePassword; 

        // Constructor
        public function __construct($username, $email, $password, $rePassword) {
            $this->username = $username;
            $this->email = $email;
            $this->password = $password;
            $this->rePassword = $rePassword;
        }

        public function signupUser() {
            if ($this->emptyInputs() == false) {
                header("location: ../index.php?error=emptyinput");
                exit();
            }

            if ($this->invalidUid() == false) {
                header("location: ../index.php?error=errorusername");
                exit();
            }

            if ($this->invalidEmail() == false) {
                header("location: ../index.php?error=emailerror");
                exit();
            }
            /** 
            if ($this->passwordMatch() == false) {
                header("location: ../index.php?error=passworddidnotmatch");
                exit();
            }
            */

            if ($this->uidTakenCheck() == false) {
                header("location: ../index.php?error=usernametaken");
                exit();
            }

            $this->setUser($this->username, $this->email, $this->password);
        }

        // Error handling

        // If there are empty fields, return false
        private function emptyInputs() {
            $result = null;

            if (empty($this->username) || empty($this->email) || empty($this->password)) {
                $result = false;
            } else {
                $result = true;
            }

            return $result;
        }

        private function invalidUid() {
            $result = null;

            if (!preg_match("/^[a-zA-Z0-9]*$/", $this->username)) {
                $result = false;
            } else {
                $result = true;
            }

            return $result;
        }

        private function invalidEmail() {
            $result = null;

            if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                $result = false;
            } else {
                $result = true;
            }

            return $result;
        }

        private function passwordMatch() {
            $result = null;

            if ($this->password !== $this->rePassword) {
                $result = false;
            } else {
                $result = true;
            }

            return $result;
        }

        private function uidTakenCheck() {
            $result = null;

            if (!$this->checkUser($this->username, $this->email)) {
                $result = false;
            } else {
                $result = true;
            }

            return $result;
        }
    }