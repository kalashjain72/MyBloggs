<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Blog</title>
    <link rel="stylesheet" type="text/css" href="style/nav_style.css">
    <link rel="stylesheet" type="text/css" href="style/create_blog.css">
    

</head>
<body>
<header>
    <nav>
        <img src="../src/logo.png" class="icon" alt="icon" />
        <ul class="list">
        <li><a href="../index.php">Home</a></li>
            <li><a href="../view/about.php">About</a></li>
            <?php if(!empty($_SESSION)) { ?>
                <li><div class="dropdown">
                    <a onclick="myFunction()" class="dropbtn">Profile</a 	>
                    <div id="myDropdown" class="dropdown-content">
                    <a href="#">Signed in as <strong><?php echo $_SESSION['username']; ?></strong></a>
                    <a href="#Changepass.php">Change PassWord</a>
                    <a href="#">Create Blog</a>
                    <a href="../controller/logout.php">Logout</a>
                    </div>
            </li></div>
            <?php } else { ?>
            <li><a href="view/login.php">Login</a></li>
            <?php } ?>
        </ul>
    </nav>
</header>
<div class=blog-box>
    <form action="" method="post">
        <label for="Title">Blog Title</label>
        <input type="text" name="title" required>
        <label for="desc">Blog Description</label>
        <input type="text" size="100" maxlength="2000"  name="Description" required>
        
        <input type="submit" value="Post Blog">
    </form>
</div>

</body>
</html>