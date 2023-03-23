<?php
session_start();
class User
{
    private $email;
    private $password;
    private $conn;
    public $first_name,$last_name,$mobile_number;
    function __construct($email, $password, $conn,$first_name,$last_name,$mobile_number)
    {
        $this->email = $email;
        $this->password = $password;
        $this->conn = $conn;
        $this->first_name =$first_name;
        $this->last_name =$last_name;
        $this->mobile_number=$mobile_number;
    }
    public function user_exists()
    {
        try {
            $sql = "SELECT email FROM users WHERE email='$this->email';";
            $result = mysqli_query($this->conn, $sql);
        } catch (error) {
            exit;
        }
        if ($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function create_user()
    {     //enter data in the data base 
        $sql = "INSERT INTO users (first_name, last_name, mobile_number, email, password) 
        VALUES ('$this->first_name', '$this->last_name', '$this->mobile_number', '$this->email', '$this->password')";
        $result = mysqli_query($this->conn, $sql);
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
        try {
            $sql = "SELECT `email`, `password` FROM `users` WHERE `email`='$this->email';";
            $result = mysqli_query($this->conn, $sql);
        } catch (error) {
            return false;
        }
        $fatched_password = $result->fetch_assoc();

        // checks if password is correct or not
        if ($this->password != $fatched_password["password"]) {
            return false;
        } else {
            // sets the user variable in session and redirects to welcome page
            $_SESSION['valid'] = true;
            $_SESSION['timeout'] = time();
            $_SESSION['username'] = $this->email;;
            return true;
        }
    }
}
?>