<?php 
    require_once('../../inc/config/dbh.php');

    // Database related stuff
    class RegisterModel extends Dbh  {

        protected function setUser($username, $email, $password) {
            $stmt = $this->connect()->prepare('INSERT INTO users (userUsername, userEmail, userPassword) VALUES (?, ?, ?);');

            $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

            if (!$stmt->execute(array($username, $email, $hashedPwd))) {
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }
            
            $stmt = null;
        }

        protected function checkUser($uid, $email) {
            $stmt = $this->connect()->prepare('SELECT users_uid FROM users WHERE users_uid = ? OR users_email = ?;');

            if (!$stmt->execute(array($uid, $email))) {
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }

            $resultCheck = null;
            if ($stmt->rowCount() > 0) {
                $resultCheck = false;
            } else {
                $resultCheck = true;
            }

            return $resultCheck;
        }
    }