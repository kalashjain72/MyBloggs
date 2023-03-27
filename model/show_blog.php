<?php
require_once("../model/connection.php");
$id = ''; // Declare and initialize the variable

if(isset($_GET['id']) ){
    $id = $_GET['id'];
    $sql = "SELECT * FROM blog WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}

?>