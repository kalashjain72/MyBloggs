<?php

try {
    require_once("../model/connection.php");
} catch (error) {
    header("Location: ../view/login.php?message=error_in_database");
}
require_once("../model/blog.php"); // Include the Blog class file

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $id =$_POST["Blog_id"];


    // Create a new Blog object
    $blog = new Blog($_POST);

    // Save the blog post
    $blog->update($conn,$id);

    
    exit;
}
?>
