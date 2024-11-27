<?php
    require_once('../../inc/config/dbh.php');

    class AccountManager {
    private $db;

        // Constructor to initialize the database connection
        public function __construct($db) {
            $this->db = $db;
        }
    }