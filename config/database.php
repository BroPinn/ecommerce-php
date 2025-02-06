<?php
namespace Config;

class Database {
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'onestore';
    
    protected $conn;

    public function __construct() {
        $this->conn = new \mysqli($this->host, $this->username, $this->password, $this->database);
        
        if ($this->conn->connect_error) {
            throw new \Exception("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getConnection() {
        return $this->conn;
    }

    public function __destruct() {
        if ($this->conn) {
            $this->conn->close();
        }
    }
}