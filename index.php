<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBlogs</title>
    <link rel="stylesheet" type="text/css" href="view/style/index_style.css">
    <link rel="stylesheet" type="text/css" href="view/style/nav_style.css">
    <script src="../view/script/index.js"></script>

</head>

<body>

    <header>
        <nav>
            <img src="../src/logo.png" class="icon" alt="icon" />
            <ul class="list">
                <li><a href="index.php">Home</a></li>
                <li><a href="../view/about.php">About</a></li>
                <?php if (!empty($_SESSION)) { ?>
                    <li>
                        <div class="dropdown">
                            <a onclick="myFunction()" class="dropbtn">Profile</a>
                            <div id="myDropdown" class="dropdown-content">
                                <a href="#">Signed in as <strong><?php echo $_SESSION['username']; ?></strong></a>
                                <a href="#Changepass.php">Change PassWord</a>
                                <a href="../view/create_blog.php">Create Blog</a>
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

    <main>
        <div class="contant">
            <?php
            require_once("model/show_title.php");
            // check if any rows were returned
            if (mysqli_num_rows($result) > 0) {
                // loop through each row and display the title
                while ($row = mysqli_fetch_assoc($result)) {
                    //var_dump($row);
                    echo "<a href='view/blog_post.php?id=" . $row["id"] . "'>";
                    echo "<div class='box'>";
                    echo "<p>" . $row["title"] . "</p>";
                    echo "</div>";
                    echo "</a>";
                }
            }
            mysqli_close($conn);
            ?>
        </div>
    </main>

    <footer style="background: linear-gradient(to bottom right, #B22222, #8B0000); margin-top: 20px;">
        <div style="text-align: center; color: white; padding: 1px; ">
            <p style="font-size: 18px;">Kalash Jain &copy; 2023</p>
        </div>
    </footer>


</body>

</html>