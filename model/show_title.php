<?php
require_once("model/connection.php");

        // select all the titles from the blog table
       $sql = "SELECT id, title FROM blog;";
       $result = mysqli_query($conn, $sql);
?>