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
    // $title = $_POST["title"];
    // $author = $_POST["author"];
    // $date = $_POST["date"];
    // $content = $_POST["content"];

    // Create a new Blog object
    // $blog = new Blog($title, $author, $date, $content);
    $blog = new Blog($_POST);
    
    // Save the blog post
    $blog->save($conn);
    
    exit;
}
?>
