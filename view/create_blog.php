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
    <link rel="stylesheet" type="text/css" href="../view/style/create_blog.css">
    <script src="../view/script/date.js"></script>


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
        <form action="../controller/create_blog_handle.php" method="post">
            <form>
                
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required>
                <label for="author">Author:</label>
                <input type="text" id="author" name="author" value=" <?php echo $_SESSION['username']; ?>" readonly>
                <label for="date">Publication Date:</label>
                <input type="date" id="date" name="date" readonly>
                <label for="content">Content:</label>
                <textarea id="content" name="content" required></textarea>
                <input type="submit" value="Post Blog">

            </form>
    </div>
    <footer style="background: linear-gradient(to bottom right, #B22222, #8B0000); margin-top: 20px;">
        <div style="text-align: center; color: white; padding: 1px; ">
            <p style="font-size: 18px;">Kalash Jain &copy; 2023</p>
        </div>
    </footer>
</body>

</html>