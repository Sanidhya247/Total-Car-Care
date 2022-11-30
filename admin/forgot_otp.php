<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Login Page - Admin</title>

    <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />


    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />


    <link rel="stylesheet" href="assets/css/ace.min.css" />


    <link rel="stylesheet" href="assets/css/ace-rtl.min.css" />



</head>

<body class="login-layout ">

    <?php

    $con = mysqli_connect("localhost", "root", "", "tcc");
    //error_reporting(0);
    session_start();
    if (isset($_POST['verify_email'])) 

    {
        

    $otpmain = $_SESSION["otp"];
    $email = $_GET['email'];
    $otp = $_POST["otp"];
    if ($otp == $otpmain) 
    {

        echo "<script>window.location.assign('reset_forgot_pass.php?email=$email')</script>";
    } else {
        echo "<script>alert('Verification code is not valid');</script>";

    }
}


?>


    <div class="main-container">
        <div class="main-content">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="login-container">
                        <div class="center">
                            <h4 class="blue" id="id-company-text"><img src="tp.png" height="120" width="300">
                        </div>
                        <div class="space-6"></div>
                        <div class="position-relative">
                            <div id="login-box" class="login-box visible widget-box no-border">
                                <div class="widget-body">
                                    <div class="widget-main">
                                        <h4 class="header blue lighter bigger">
                                            <i class="ace-icon fa fa-coffee green"></i>
                                            RESET PASSWORD
                                        </h4>
                                        <h6 class="mb-20" style="color:#6c757d">CHECK YOUR EMAIL FOR VERIFICATION CODE
                                        </h6>

                                        <div class="space-6"></div>
                                        <form method="POST" enctype="multipart/form-data">
                                            <fieldset>
                                                <label class="block clearfix">
                                                    <div class="form-group">
                                                        <input type="text" name="otp" id="otp" class="form-control"
                                                            placeholder="Verification Code" required>
                                                        <i class="ace-icon fa fa-password"></i>
                                                    </div>
                                                </label>
                                                <!-- <div class="form-group">
                                                    <button type="submit" name="verify_email" id="verify_email"
                                                        class="form-control btn btn-primary submit px-3">Submit</button>
                                                </div> -->
                                                <input type="submit" name="verify_email" class="class=form-control btn
                                                    btn-primary submit px-3" value=submit>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html>