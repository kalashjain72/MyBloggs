<?php
session_start();
require_once("../model/blog.php");
require_once("../model/connection.php");

// Check if the id parameter is set in the URL and the user is logged in
if (isset($_GET['id']) && !empty($_SESSION)) {
    // Create a new Blog object
    $blog = new Blog();
    // Call the delete method on the Blog object, passing the id from the URL
    $blog->delete($conn,$_GET['id']);
}
// Redirect to the home page
header("Location: ../index.php");
exit();
?>
