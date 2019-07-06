<?php 
require('inc/config.php');
?>
<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <title>Hack36-Add New</title>
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
     <style type="text/css">
.tp1{
  color: white;
  font-size: 80px;
  margin-top: 200px;
}
.column {
  float: left;
  margin: 5px;
  width: 20%;
  text-align: center;
  padding: 2px;
  height: 50px; /* Should be removed. Only for demonstration */
}
.card-container {
    display: grid;
    padding: 1rem;
    grid-template-columns: repeat(auto-fit, minmax(32px, 1fr));
    grid-gap: 1rem;
}
.card {
    display: grid;
}
.card .button {
    align-self: end;
}







/* Simple Card styles for prettying */

html {
    font-size: 16px;
    font-family: 'Open Sans', 'Helvetica Neue', 'Arial', sans-serif;
}

body {
    background-color: #efefef;
}
* {
    box-sizing: border-box;
}
.card {
    box-shadow: 0px 1px 5px #555;
    background-color: white;
}
.card__title {
    font-size: 2rem;
    padding: .5rem;
}
.card__description {
    padding: .5rem;
    line-height: 1.6em;
}
.button {
    display: block;
    background-color: tomato;
    padding: 10px 20px;
    color: white;
    text-decoration: none;
    text-align: center;
    transition: .3s ease-out;
    &:hover {
        background-color: darken(tomato, 10%);
    }
}
img {
    max-width: 100%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

</style>
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
                            <li><a href="index.html">About</a></li>
                            
                            <li>
                                <!-- First Tier Drop Down -->
                                <label for="drop-2" class="toggle toogle-2">Pages <span class="fa fa-angle-down"
                                        aria-hidden="true"></span>
                                </label>
                                <a href="#">Pages <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                <input type="checkbox" id="drop-2" />
                                <ul>
                                    <li><a href="index.html" class="drop-text">Events</a></li>
                                    <li><a href="index.html" class="drop-text">Popular Tech Stacks</a></li>
                                    <li><a href="index.html" class="drop-text">Statistics</a></li>
                                    <li><a href="index.html" class="drop-text">Gallery</a></li>
                                </ul>
                            </li>
                            <li><a href="addnew1.php">Add new + </a></li>
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
                            <li><a href="index.html">Contact</a></li>
                            
                        </ul>
                    </nav>
                </div>
                <!-- //nav -->
            </div>
        </div>

    </header>
      <center>
<a href="member.php"><div class="card" style="width:25%"align="center" margintop="20px">
  <center><img src='teams.jpg' alt="Avatar" style="width:40%" align="center"></center>
  <div class="container">
    <h4><b>Introduce new team</b></h4> 
  </div>
</div></a><br><br>
<a href="addteam.php"><div class="card" style="width:25%" align="left">
  <img src='projects.jpg' alt="Avatar" style="width:25%" align="left">
  <div class="container">
    <h4><b>Add new projects</b></h4> 
  </div>
</div></a><br><br>
<a href="sponsors.php"><div class="card" style="width:25%" align="left">
  <img src='sponsors.png' alt="Avatar" style="width:25%" align="left">
  <div class="container">
    <h4><b>Sponsors</b></h4> 
  </div>
</div></a><br><br>

<a href="addteam.php"><div class="card" style="width:25%" align="left">
  <img src='winners.jpg' alt="Avatar" style="width:25%" align="left">
  <div class="container">
    <h4><b>Winners of this year</b></h4> 
  </div>
</div></a><br><br>

<a href="addteam.php"><div class="card" style="width:25%" align="left">
  <img src='mentors.jpg' alt="Avatar" style="width:25%" align="left">
  <div class="container">
    <h4><b>Mentor teachers</b></h4> 
  </div>
</div></a><br><br>
<a href="addteam.php"><div class="card" style="width:25%" align="left">
  <img src='expenditure.jpg' alt="Avatar" style="width:25%" align="left">
  <div class="container">
    <h4><b>Expenditure</b></h4> 
  </div>
</div></a><br><br>
</center>
    <!-- //header -->
           
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