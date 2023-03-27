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
    <link rel="stylesheet" type="text/css" href="../view/style/blog_style.css">
    <link rel="stylesheet" type="text/css" href="../view/style/nav_style.css">
    <script src="../view/script/index.js"></script>

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
                                <a href="../view/create_blog.php">Create Blog</a>
                                <a href="../controller/logout.php">Logout</a>
                            </div>
                    </li>
                    </div>
                <?php } else { ?>
                    <li><a href="../view/login.php">Login</a></li>
                <?php } ?>
            </ul>
        </nav>
    </header>



    <main>
        <div class="content">
            <?php
            // Check if the id parameter is set in the URL
            if (isset($_GET['id'])) {
                // Get the id parameter from the URL
                require_once("../model/show_blog.php");
                // Display the blog post details
                echo "<div class='heading'><h1>" . $row['title'] . "</h1></div>";
                echo "<div class='meta-info'>
                <p class='author'>Posted by " . $row['author'] . "</p>
                <p class='date'>" . $row['date'] . "</p>
                </div>";
                echo "<div class='blog'><p>" . $row['content'] . "</p></div>";
                if (trim($_SESSION['username']) === trim($row['author'])) {
                    echo "<div class='action-buttons'>
                <button class='delete-button' onclick='confirmDelete()'>Delete</button>
                <a href='../view/edit_blog.php?id=" . $_GET['id'] . "'><button class='edit-button'>Edit</button></a>
                </div>";
                }
            }
            ?>
        </div>
    </main>
    <footer style="background: linear-gradient(to bottom right, #B22222, #8B0000); margin-top: 20px;">
        <div style="text-align: center; color: white; padding: 1px; ">
            <p style="font-size: 18px;">Kalash Jain &copy; 2023</p>
        </div>
    </footer>
    <script>
        function confirmDelete() {
            if (confirm("Are you sure you want to delete this blog post?")) {
                window.location.href = "../controller/delete_handle.php?id=<?php echo $_GET['id']; ?>";
            }
        }
    </script>


</body>

</html>