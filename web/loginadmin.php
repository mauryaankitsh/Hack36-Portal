<?php 
require('inc/config.php');
?>
<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <title>Hack36-Admin Login</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="My School Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
    <!-- //Meta tag Keywords -->

    <!-- Custom-Files -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Bootstrap-CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <!-- Style-CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //Custom-Files -->

    <!-- Web-Fonts -->
    <link href="//fonts.googleapis.com/css?family=Lora:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
    <!-- //Web-Fonts -->
</head>

<body>
    <!-- header -->
    <header>
        <div class="container">
            <div class="header d-lg-flex justify-content-between align-items-center py-2 px-sm-2 px-1">
                <!-- logo -->
                <div id="logo">
                    <h1><a href="index.html">Hack 36</a></h1>
                </div>
                <!-- //logo -->
                <!-- nav -->
                <div class="nav_w3ls ml-lg-5">
                    <nav>
                        <label for="drop" class="toggle">Menu</label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu">
                            <li><a href="index1.php">Home</a></li>
                            <li><a href="index1.php">About</a></li>
                            
                            <li>
                                <!-- First Tier Drop Down -->
                                <label for="drop-2" class="toggle toogle-2">Pages <span class="fa fa-angle-down"
                                        aria-hidden="true"></span>
                                </label>
                                <a href="#">Pages <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                <input type="checkbox" id="drop-2" />
                                <ul>
                                    <li><a href="index1.php" class="drop-text">Popular Tech Stacks</a></li>
                                    <li><a href="index1.php" class="drop-text">Statistics</a></li>
                                    <li><a href="index1.php" class="drop-text">Gallery</a></li>
                                </ul>
                            </li>
                            <li>
                                <!-- First Tier Drop Down -->
                                <label for="drop-2" class="toggle toogle-2">Login <span class="fa fa-angle-down"
                                        aria-hidden="true"></span>
                                </label>
                                <a href="#">Login <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                <input type="checkbox" id="drop-2" />
                                <ul>
                                    <li><a href="login1.php" class="drop-text">as Coordinator</a></li>
                                    <li><a href="loginadmin.php" class="drop-text">as Admin</a></li>
                                </ul>
                            </li>
                            <li><a href="register1.php">Apply for Coordinator</a></li>
                            <li><a href="index1.php">Contact</a></li>
                            
                        </ul>
                    </nav>
                </div>
                <!-- //nav -->
            </div>
        </div>
    </header>
    <!-- //header -->

    <!-- inner banner -->
    <div class="inner-banner-w3ls py-5" id="home">
        <div class="container py-xl-5 py-lg-3">
            <!-- login  -->
            <div class="modal-body my-5 pt-4">
                <h3 class="title-w3 mb-5 text-center text-wh font-weight-bold">
                Admin's Login </h3>
                <form action="loginadmin.php" method="post">
                    <div class="form-group">
                        <label class="col-form-label">Email</label>
                        <input type="email" class="form-control" placeholder="yourmail@email.com" name="email" required="">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Password</label>
                        <input type="password" class="form-control" placeholder="*****" name="password" required="">
                    </div>
                    <div class="form-group">
                            <label class="col-form-label">Year</label>
                            <input type="text" class="form-control" placeholder="YYYY" name="year" required="">
                        </div>
                   <!--  <button type="submit" class="btn button-style-w3" name="submit">Login</button> -->
                   <input type="submit" id="submit" name="submit" value="Submit" class="btn btn-success btn-block">
                    <div class="row sub-w3l mt-3 mb-5">
                        <div class="col-sm-6 sub-w3layouts_hub">
                            <input type="checkbox" id="brand1" value="">
                            <label for="brand1" class="text-li text-style-w3ls">
                                <span></span>Remember me?</label>
                        </div>
                        <div class="col-sm-6 forgot-w3l text-sm-right">
                            <a href="#" class="text-li text-style-w3ls">Forgot Password?</a>
                        </div>
                    </div>
                    <!-- <p class="text-center dont-do text-style-w3ls text-li">Don't have an account?
                        <a href="register.html" class="font-weight-bold text-li">
                            Register Now</a>
                    </p> -->
                </form>
            </div>
            <!-- //login -->
        </div>
    </div>
    <?php
  //$db = mysqli_connect('localhost','root','password','olx_schema');
  // require('inc/config.php');
   if(isset($_POST['submit'])){
     $email_address = mysqli_escape_string($db,$_POST['email']);
     $password = mysqli_escape_string($db,$_POST['password']);
    $year=mysqli_escape_string($db,$_POST['year']);
     $query = "SELECT * FROM admin WHERE aemail = '$email_address' AND apassword= '$password' and year='$year'";
     $result = mysqli_query($db,$query);
     //echo "<script type='text/javascript'>alert('$result')</script>";
     if(mysqli_num_rows($result)==1){
           $_SESSION['email'] = $email_address;
           $_SESSION['success'] = "You are now logged in";
           $_SESSION['year']=$year;?>
           <script type="text/javascript">
window.location.href = 'adminhome.php';
</script>
     <?php }
     else{
           echo "<script type='text/javascript'>alert('Failed to Login! Incorrect Email or Password')</script>";
     }
   }
?>
    <!-- //inner banner -->

    <!-- footer -->
    <footer class="py-5">
        <div class="container py-xl-4 py-lg-3">
            <div class="row footer-grids">
                <div class="col-lg-2 col-6 footer-grid">
                        <h3 class="mb-sm-4 mb-3">Navigation</h3>
                        <ul class="list-unstyled">
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <a href="index.html">About Us</a>
                            </li>
                            <li>
                                <a href="index.html">Our Gallery</a>
                            </li>
                        </ul>
                </div>
                <div class="col-lg-2 col-6 footer-grid">
                        <h3 class="mb-sm-4 mb-3">Some More</h3>
                        <ul class="list-unstyled">
                            <li>
                                <a href="register.html">Apply For Coordinators</a>
                            </li>
                            <li>
                                <a href="index.html">Popular Tech Stacks</a>
                            </li>
                        </ul>
                </div>
                <div class="col-lg-2 col-6 footer-grid footer-contact mt-lg-0 mt-4">
                        <h3 class="mb-sm-4 mb-3">Get In Touch</h3>
                        <ul class="list-unstyled">
                            <li>
                                    Prayagraj - 211004, INDIA</br>

                                    Telephone No.: 91-0532-2545404, 2545407 </br>
                                    
                                    Fax No.: 91-0532-2545341</br>
                            </li>
                            <li>
                                <a href="http://mnnit.ac.in/" target="_blank">mnnit.ac.in</a>
                            </li>
                            <li>
                                    <a href="http://hack36.com/" target="_blank">hack36.com</a>
                            </li>
                        </ul>
                </div>
                <div class="col-lg-2 col-6 footer-grid text-lg-right">
                        <ul class="list-unstyled">
                                <li>
                                    <a href="index.html">Our Statistics</a>
                                </li>
                                <li>
                                    <a href="login.html">Admin Login</a>
                                </li>
                                <!-- <li>
                                    <a href="register.html">Register</a>
                                </li> -->
                                <li>
                                    <a href="index.html">Contact Us</a>
                                </li>
                            </ul>
                </div>
                <div class="col-lg-4 footer-grid mt-lg-0 mt-4">
                    <div class="footer-logo">
                        <h2 class="text-lg-center text-center">
                            <a class="logo text-wh font-weight-bold" href="index.html">
                                MNNIT, Allahabad</a>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- //footer -->
    <!-- copyright -->
    <div class="copyright-w3ls py-4">
        <div class="container">
            <div class="row">
                <!-- copyright -->
                <p class="col-lg-8 copy-right-grids text-wh text-lg-left text-center mt-lg-2">© 2019 MNNIT, Allahabad. All
                    Rights Reserved
                </p>
                <!-- //copyright -->
                <!-- social icons -->
                <div class="col-lg-4 w3social-icons text-lg-right text-center mt-lg-0 mt-3">
                        <ul>
                                <li>
                                    <a href="https://www.facebook.com/hack36mnnit/" class="rounded-circle" target="_blank">
                                        <span class="fa fa-facebook-f"></span>
                                    </a>
                                </li>
                                <li class="px-2">
                                    <a href="#" class="rounded-circle">
                                        <span class="fa fa-google-plus"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/hack36mnnit?lang=en" class="rounded-circle" target="_blank">
                                        <span class="fa fa-twitter"></span>
                                    </a>
                                </li>
                                <li class="pl-2">
                                    <a href="#" class="rounded-circle">
                                        <span class="fa fa-dribbble"></span>
                                    </a>
                                </li>
                            </ul>
                </div>
                <!-- //social icons -->
            </div>
        </div>
    </div>
    <!-- //copyright -->
    <!-- move top icon -->
    <a href="#home" class="move-top text-center">
        <span class="fa fa-angle-double-up" aria-hidden="true"></span>
    </a>
    <!-- //move top icon -->

</body>

</html>