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
    session_start();
    // $user_id=$_SESSION['user_id'];
    $email = $_GET['email'];
    include('connect.php');
    if (isset($_POST['submit'])) {

        // $password = $_POST['password'];
        $newpassword = $_POST['newpassword'];
        $conpassword = $_POST['conpassword'];


        $q = mysqli_query($con, "update registration set password='$newpassword' where email='$email'");
        // echo "update uregis set password='$newpassword' where email=$email";

        if ($q) {
            echo "<script>alert('Congratulations You have successfully changed your password');</script>";

            echo "<script>window.location.assign('index.php'); </script>";
        } else {
            echo "<script>alert('Passwords do not match');</script>";
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
                                        <h6 class="mb-20" style="color:#6c757d">Enter your new password, confirm and
                                            submit</h6>

                                        <div class="space-6"></div>
                                        <form method="POST" enctype="multipart/form-data">
                                            <fieldset>
                                                <label class="block clearfix">
                                                    <div class="form-group">
                                                        <input type="password" name="newpassword" id="newpassword"
                                                            class="form-control" placeholder="New password" required>
                                                        <i class="ace-icon fa fa-password"></i>
                                                    </div>
                                                </label>
                                                <label class="block clearfix">
                                                    <div class="form-group">
                                                        <input type="password" name="conpassword" id="conpassword"
                                                            class="form-control" placeholder="Confirm New Password"
                                                            onchange="chk()" required>
                                                        <i class="ace-icon fa fa-password"></i>

                                                    </div>
                                                </label>
                                                <div class="form-group">
                                                    <button type="submit" name="submit"
                                                        class="form-control btn btn-primary submit px-3">Submit</button>
                                                </div>
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