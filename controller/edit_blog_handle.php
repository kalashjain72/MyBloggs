<?php
require_once("../vendor/autoload.php");
use Model\blog;

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $id =$_POST["Blog_id"];
    // Create a new Blog object
    $blog = new blog($_POST);
    // Save the blog post
    $blog->update($id);
    exit;
}
?>
