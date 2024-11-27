<?php 
// Database connection
class Dbh {
    
    protected function connect() {
        try {
            $username = "root";
            $password = "jgadmin";
            // Database handler
            $dbh = new PDO('mysql:host=localhost;dbname=rantle_database', $username, $password);
            return $dbh;
        } catch (PDOException $e) {
            print "Error: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    
}