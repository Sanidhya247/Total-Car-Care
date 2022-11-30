<!--
author: Boostraptheme
author URL: https://boostraptheme.com
License: Creative Commons Attribution 4.0 Unported
License URL: https://creativecommons.org/licenses/by/4.0/
-->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TOTAL CAR CARE</title>
    <link rel="shortcut icon" href="img/tp.png">

    <!-- Global Stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate/animate.min.css">
    <link rel="stylesheet" href="css/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body id="page-top">
    <?php
session_start();
?>
    <!--====================================================
                         HEADER
======================================================-->

    <header>

        <!-- Top Navbar  -->
        <div class="top-menubar">
            <div class="topmenu">
                <div class="container">
                    <div class="row">
                        <!-- <div class="col-md-7"> -->
                        <!-- <ul class="list-inline top-contacts">
                                <li>
                                    <i class="fa fa-envelope"></i> Email: <a
                                        href="mailto:totalcarcare5@gmail.com">totalcarcare5@gmail.com</a>
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i> Hotline: +91 720 300 0719
                                </li>
                            </ul> -->
                        <!-- </div> -->
                        <!-- <div class="col-md-5">
                            <ul class="list-inline top-data">
                                <li><a href="https://www.facebook.com/totalcarcare.group" target="_blank"><i
                                            class="fa top-social fa-facebook"></i></a></li>
                                <li><a href="https://mobile.twitter.com/Totalcarcare2/with_replies?t=BVhb4axoAvq3b5d8YHsTIw&s=09"
                                        target="_blank"><i class="fa top-social fa-twitter"></i></a></li>
                                <li><a href="https://google.com" target="_blank"><i
                                            class="fa top-social fa-google-plus"></i></a></li>
                                <li><a href="../latest/login-form-20/login.php" class="log-top">Login</a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav" data-toggle="affix"
            style="background-color:black; color:white; ">

            <!-- #26436B -->
            <div class="container">
                <a class="navbar-brand smooth-scroll" href="index.php">
                    <img src="img/tp.png" height="50%" width="50%" alt="logo">
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link smooth-scroll" href="index.php">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle smooth-scroll" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
                            <div class="dropdown-menu dropdown-cust" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="aboutus.php">About Us</a>
                                <a class="dropdown-item" href="meetourteam.php">Meet Our Team</a>
                                <a class="dropdown-item" href="contactus/contactus.php">Contact Us</a>
                                <a class="dropdown-item" href="faqs.php">FAQ</a>
                                <a class="dropdown-item" href="testimonials.php">Testimonials</a>
                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link smooth-scroll" href="service.php">Services</a></li>



                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle smooth-scroll" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
                            <div class="dropdown-menu dropdown-cust mega-menu" aria-labelledby="navbarDropdownMenuLink">
                                <!-- <div class="row"> -->
                                <div>
                                    <a class="dropdown-item" href="carparts.php">Car Parts</a>
                                    <a class="dropdown-item" href="caracc.php">Car Accessories</a>
                                    <a class="dropdown-item" href="carlogo.php">Old car </a>
                                    <!-- <a class="dropdown-item" href="cart.php">Cart</a> -->
                                    <!-- <a class="dropdown-item" href="checkout.html">Checkout</a> -->
                                    <a class="dropdown-item" href="../latest/login-form-20/login.php">Myaccount</a>
                                </div>

                                <!-- </div> -->
                            </div>
                        </li>


                        <!-- -------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                            user profile Start
------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

                        <?php

if(isset($_SESSION['uid']))
{
?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle smooth-scroll" href="userprofile.php"
                                id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i>
                            </a>
                            <div class="dropdown-menu dropdown-cust" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="userprofile.php">
                                    <?php
                                include('connect.php');
                                $uid=$_SESSION['uid'];
                                $q=mysqli_query($con,"select * from user_registration where uid=$uid");
                                $row=mysqli_fetch_array($q);
                                echo $row[1];
                                ?>
                                </a>
                                <a class="dropdown-item" href="userprofile.php">Profile</a>
                                <a class="dropdown-item" href="../latest/login-form-20/verify_password.php">Reset
                                    Password</a>
                                <a class="dropdown-item" href="logout.php">Logout</a>
                            </div>
                        </li>


                        <?php
}
else
{
   ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle smooth-scroll" href="userprofile.php"
                                id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i>
                            </a>
                            <div class="dropdown-menu dropdown-cust" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="../latest/login-form-20/login.php">Login</a>
                            </div>
                        </li>

                        <?php 
}
?>

                        <!-- <div>
                            <?php
                        if (isset($_SESSION['user_name']) && isset($_SESSION['contact'])) {
                        ?>
                            <a href="userprofile.php" class="nav-item nav-link">
                                <h3 class="bi bi-person-circle"
                                    style="color:white; margin-bottom: 4px;  margin-left: 30px; "></h3>
                                <div class="nav-item dropdown">

                                    <span style="color: white; font-size:77%"><a href="#"
                                            class="nav-link dropdown-toggle"
                                            style="color: white; font-size:77%; margin-top: -25%;"
                                            data-bs-toggle="dropdown"> <?php echo $_SESSION['user_name']; ?> </a></span>
                                    <div class="dropdown-menu m-0" style="width: 230px;">



                                        <a class="dropdown-item"><?php
                                                                    echo $_SESSION['contact'];
                                                                    ?> </a>

                                        <hr>
                                        <a href="userprofile.php" class="dropdown-item">Profile</a>
                                        <a href="carbrands.php" class="dropdown-item">Previous Rides</a>
                                        <a href="login.php" class="dropdown-item">Bikes</a>
                                        <a href="testimonial.html" class="dropdown-item">Kaali Peeli</a>
                                        <a href="../user/login-form-20/logout.php" class="dropdown-item">Logout</a>


                                    </div>
                                </div>
                            </a>
                            <?php
                        } else {
                        ?>
                            <a href="../user/login-form-20/login.php" class="nav-item nav-link">
                                <h3 class="bi bi-person-circle"
                                    style="color:white; margin-left: 18%; margin-bottom: -12px;"></h3>
                                <div class="nav-item dropdown">
                                    <span style="color: white; font-size:77%"><a href="#"
                                            class="nav-link dropdown-toggle"
                                            style="color: white; font-size:77%; margin-top: -25%;"
                                            data-bs-toggle="dropdown">Sign In</a></span>
                                    <div class="dropdown-menu m-0" style="width: 230px;">
                                        <h6 class="dropdown-item" style="font-weight: 1000;"> Welcome </h6>
                                        <p class="dropdown-item" style="font-size: 85%; margin-top:-10px;"> To Book your
                                            memorable Rides </p>
                                        <a href="login-form-20/login.php"
                                            class="nav-item nav-link btn btn-outline-warning dropdown-item"
                                            style="width:150px; font-size: 75%; margin-top:-10px; border: 2px; margin-left:10px; margin-bottom:-10px;  color:#FEA116;">Sign
                                            In/Sign Up</a>
                                        <hr>
                                        <a href="userprofile.php" class="dropdown-item"
                                            style="font-size: 95%; margin-top:-10px;">Profile</a>
                                    </div>
                                </div>
                            </a>
                            <?php
                        }
                        ?>
                        </div> -->

                        <!-- -------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                            user profile End
------------------------------------------------------------------------------------------------------------------------------------------------------------- -->


                        <li class="nav-item"><a class="nav-link smooth-scroll" href="cart.php"><i
                                    class="fa fa-shopping-cart fa-1.5x" aria-hidden="true"></i></a></li>
                        <li>

                        <li>
                            <div class="top-menubar-nav">
                                <div class="topmenu ">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <ul class="list-inline top-contacts">
                                                    <li>
                                                        <i class="fa fa-envelope"></i> Email: <a
                                                            href="mailto:info@htmlstream.com">info@htmlstream.com</a>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-phone"></i> Hotline: (1) 396 4587 99
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul class="list-inline top-data">
                                                    <li><a href="https://www.facebook.com/" target="_blank"><i
                                                                class="fa top-social fa-facebook"></i></a></li>
                                                    <li><a href="#" target="_empty"><i
                                                                class="fa top-social fa-twitter"></i></a>
                                                    </li>
                                                    <li><a href="#" target="_empty"><i
                                                                class="fa top-social fa-google-plus"></i></a></li>
                                                    <li><a href="../login-form-20/login.php">Login</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>