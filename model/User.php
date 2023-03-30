<?php
namespace Model;
require_once("../vendor/autoload.php");
use Model\connection;
session_start();

class User
{
    private $email;
    private $newPassword;
    public $db;
    public $FirstName,$LastName,$phone;
    function __construct($data = [])
    {
        foreach ($data as $key => $value) {
            $this->$key = $value;
        }
        $this->db = new connection();
    }
    public function user_exists()
    {
            $sql = "SELECT email FROM users WHERE email='$this->email';";
            $result = mysqli_query($this->db->conn, $sql);
        if ($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function create_user()
    {     //enter data in the data base 
        $sql = "INSERT INTO users (first_name, last_name, mobile_number, email, password) 
        VALUES ('$this->FirstName', '$this->LastName', '$this->phone', '$this->email', '$this->newPassword')";
        $result = mysqli_query($this->db->conn, $sql);
        echo $this->email;
        if ($result) {
            return true;   
        } else {
            false;
        }
    }
    public function check_password()
    {
        // try querying sql database if successful perform operations else redirect
            $sql = "SELECT `email`, `password` FROM `users` WHERE `email`='$this->email';";
            $result = mysqli_query($this->db->conn, $sql);
            $fatched_password = $result->fetch_assoc();
        // checks if password is correct or not
        if ($this->newPassword != $fatched_password["password"]) {
            return false;
        } else {
            // sets the user variable in session and redirects to welcome page
            $_SESSION['valid'] = true;
            $_SESSION['timeout'] = time();
            $_SESSION['username'] = $this->email;
            return true;
        }
    }
}
?>