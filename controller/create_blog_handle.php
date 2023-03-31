<?php
require_once("../vendor/autoload.php");
use Model\blog;

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $blog = new blog($_POST);
    // Save the blog post
    $blog->save();
    exit;
}
?>
