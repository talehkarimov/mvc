<?php
class Database {
    protected $db;
    private $host = 'localhost';
    private $schema = 'test';
    private $charset = 'utf8';
    private $user = 'root';
    private $pass = '';

    public function __construct()
    {
        try {
            $this->db = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->schema . ';charset=' . $this->charset,$this->user,$this->pass);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
           
    }

}