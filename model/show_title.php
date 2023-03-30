<?php

require_once("./vendor/autoload.php");
use Model\connection;
$db = new connection();

        // select all the titles from the blog table
        $sql = "SELECT id, title FROM blog;";
        $result = mysqli_query($db->conn, $sql);
?>