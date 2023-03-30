<?php
require_once("../vendor/autoload.php");
use Model\connection;
$db = new connection();

$id = ''; // Declare and initialize the variable

if(isset($_GET['id']) ){
    $id = $_GET['id'];
    $sql = "SELECT * FROM blog WHERE id='$id'";
    $result = mysqli_query($db->conn, $sql);
    $row = mysqli_fetch_assoc($result);
}
?>