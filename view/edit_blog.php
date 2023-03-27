<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Blog</title>
    <link rel="stylesheet" type="text/css" href="style/nav_style.css">
    <link rel="stylesheet" type="text/css" href="../view/style/create_blog.css">
    <script src="../view/script/ed_date.js"></script>


</head>

<body>
    <header>
        <nav>
            <img src="../src/logo.png" class="icon" alt="icon" />
            <ul class="list">
                <li><a href="../index.php">Home</a></li>
                <li><a href="../view/about.php">About</a></li>
                <?php if (!empty($_SESSION)) { ?>
                    <li>
                        <div class="dropdown">
                            <a onclick="myFunction()" class="dropbtn">Profile</a>
                            <div id="myDropdown" class="dropdown-content">
                                <a href="#">Signed in as <strong><?php echo $_SESSION['username']; ?></strong></a>
                                <a href="#Changepass.php">Change PassWord</a>
                                <a href="#">Create Blog</a>
                                <a href="../controller/logout.php">Logout</a>
                            </div>
                    </li>
                    </div>
                <?php } else { ?>
                    <li><a href="view/login.php">Login</a></li>
                <?php } ?>
            </ul>
        </nav>
    </header>
    <div class=blog-box>
        
        
                <?php
            if(isset($_GET['id'])) { 
                // Get the id parameter from the URL
                require_once("../model/show_blog.php"); ?>
                <form action="../controller/edit_blog_handle.php" method="post">
                <label for="Id">Blog Id:</label>
                <input type="text" id="Blog_id" name="Blog_id" value=" <?php echo $_GET['id']; ?>" readonly>
                
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" value ="<?php echo $row['title']; ?>" required>
                <label for="author">Author:</label>
                <input type="text" id="author" name="author" value=" <?php echo $_SESSION['username']; ?>" readonly>
                <label for="date">Publication Date:</label>
                <input type="date" id="date" name="date"  readonly>
                <label for="content">Content:</label>
                <textarea id="content" name="content" required><?php echo $row['content']; ?></textarea>
                <input type="submit" value="Edit Blog">
                
                </form>
                <?php } ?>
    </div>

</body>

</html>