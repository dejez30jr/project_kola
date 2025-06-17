<?php
class Database {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbname = "nuri_db";
    protected $dbh;

    public function __construct() {
        try {
            $this->dbh = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->user, $this->pass);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
