<?php 
session_start();
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" type="text/css" href="style/about_style.css">
    <link rel="stylesheet" type="text/css" href="style/nav_style.css">
    <script src="../view/script/index.js"></script>
</head>
<header>
		<nav>
			<img src="../src/logo.png" class="icon" alt="icon" />
			<ul class="list">
			<li><a href="../index.php">Home</a></li>
				<li><a href="#">About</a></li>
				<?php if(!empty($_SESSION)) { ?>
					<li><div class="dropdown">
						<a onclick="myFunction()" class="dropbtn">Profile</a 	>
						<div id="myDropdown" class="dropdown-content">
						<a href="#">Signed in as <strong><?php echo $_SESSION['username']; ?></strong></a>
						<a href="#Changepass.php">Change PassWord</a>
						<a href="../view/create_blog.php">Create Blog</a>
						<a href="../controller/logout.php">Logout</a>
						</div>
				</li></div>
				<?php } else { ?>
				<li><a href="../view/login.php">Login</a></li>
				<?php } ?>
			</ul>
		</nav>
	</header>
<body>
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

        <!-- ======= About Me ======= -->
        <div class="about-me container">

            <div class="section-title">
                <h2>About</h2>
            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <img src="../src/me.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <p>I solve problems in creative ways. At SKIT, where I am completing my senior year in the College of Engineering, I have learned the importance of applying classical strategies to modern-day projects.

                        Concentrations in COMPUTER SCIENCE and electrical engineering provide a broad knowledge of engineering concepts
                        Participated in several patent procedures with my CSE engineering team
                        Experience at Houston Mechatronics as a summer intern taught me how to apply code in real life to automated systems in home, vehicles and bots
                        Passion for innovation, prototyping, and high-quality manufacturing
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> 07 November 2001</li>
                                <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> +91 98292 62793</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="icofont-rounded-right"></i> <strong>City:</strong> Jaipur, India</li>
                                <li><i class="icofont-rounded-right"></i> <strong>Email:</strong> kalashjain72@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- End About Me -->

        <!-- ======= Interests ======= -->
        <div class="interests container">

            <div class="section-title">
                <h2>Interests</h2>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="icon-box">
                        <i class="ri-global-line" style="color: #ffbb2c;"></i>
                        <h3>Cyber Security</h3>
                    </div>
                </div>

        
                <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="ri-robot-fill" style="color: #e80368;"></i>
                        <h3>Robotics</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                    <div class="icon-box">
                        <i class=" ri-code-box-fill" style="color: #1c7d32;"></i>
                        <h3>Shell</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                    <div class="icon-box">
                        <i class="ri-computer-fill" style="color: #28a745;"></i>
                        <h3>Automation and IOT</h3>
                    </div>
                </div>
    
                <div class="col-lg-3 col-md-4 mt-4">
                    <div class="icon-box">
                        <i class="ri-flight-takeoff-fill" style="color: #ffc107;"></i>
                        <h3>Drones</h3>
                    </div>
                </div>
            </div>

        </div><!-- End Interests -->
    </section><!-- End About Section -->
</body>

</html>