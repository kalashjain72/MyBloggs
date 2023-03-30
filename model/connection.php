<?php
namespace Model;

class connection
{
    public $host = "localhost";
    public $user = "root";
    public $pass = "kalash72";
    public $dbname = "BloggingWebsite";
    public $conn;

    function __construct()
    {
    
        $this->conn = new \mysqli(
            $this->host,
            $this->user,
            $this->pass,
            $this->dbname
        );
        if ($this->conn->connect_error) {
            die("Connection failed: "
                . $this->conn->connect_error);
        } else {
        }
    }
}
?>