<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Login Page - Admin</title>

    <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- text fonts -->
    <link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="assets/css/ace.min.css" />


    <link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
    <script>
    function chk() {
        var a = document.getElementById("password").value;
        var b = document.getElementById("conpassword").value;
        if (a != b)
            alert('password does not match');
    }

    function vali() {

        // var no=frm.txtno.value;201.3
        var aname = myform.aname.value;
        var letters = /^[\w'\-,.][^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,}$/;
        // var code=frm.txtcode.value;
        var phone = myform.phone.value;
        // if (no=='' || isNaN(no))
        // alert("enter valid emp no");
        if (aname == "" || !letters.test(aname)) {

            alert("Enter Valid User Name");

            return false;
        }
        // if(code=='''' | | code.length! =6 | | isNaN(code))
        // alert("entre valid zipcode digits." );
        if (phone = '' || phone.length != 10 || isNaN(phone)) {
            alert("Entre valid contact number");
            return false;
        }

        var a = document.getElementById("password").value;
        var b = document.getElementById("conpassword").value;
        if (a != b) {
            alert('password does not match');
            return false;
        }

        var photo = document.getElementById("photo").files.item(0).name;
        if (photo.search(/(\.jpg|\.jpeg|\.png|\.gif|\.jfif)$/i) === -1) {
            alert("Photo image should be jpg")
            return false;
        }

        if (!photo.exec(photo)) {
            document.getElementById("photo").innerHTML = "* Invalid file type";
            return false;
        }
    }
    </script>


</head>

<body class="login-layout ">

    <?php
	session_start();

	$con=mysqli_connect("localhost","root","","tcc");
    if(isset($_POST['login']))
    {
        $aname=$_POST['aname'];
        $password=$_POST['password'];

        $q=mysqli_query($con,"select * from registration where aname='$aname' and password='$password'");
		$row=mysqli_fetch_array($q);
		$ph=$row[2];
		$em=$row[3];
		$pic=$row[5];
		$cnt  = mysqli_num_rows($q);
		// $_SESSION['aid'] = $row['aid'];

        if($cnt>0)
        {
            echo "<script>alert('login successfully......');</script>";
			$_SESSION['aid'] = $row['aid'];
			$_SESSION['aname'] = $aname;
			$_SESSION['pic'] = $pic;
			$_SESSION['ph'] = $ph;
			$_SESSION['em'] = $em;
            header("location:dashboard.php");
        }
        else
        {
            echo "<script>alert('invalid admin....');</script>";
        }
    }
    ?>

    <?php
    $con=mysqli_connect("localhost","root","","tcc");
 
    if(isset($_POST['submit']))
    {
        
        $aname=$_POST['aname'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $conpassword2=$_POST['conpassword2'];
        //$photo=$_POST['photo'];

		$file_name=$_FILES["photo"]["name"];
		$file_temp=$_FILES["photo"]["tmp_name"];
		
		$photo=$_FILES["photo"]["name"];
   		$dst="./admin_photo/".$photo;

        $q=mysqli_query($con,"insert into registration values('','$aname','$phone','$email','$password','$file_name')");
        if($q)
        {
              move_uploaded_file($file_temp,"admin_photo/".$file_name);
              echo "<script>alert('Inserted......');</script>";
        }
       else
       {
            echo "<script>alert('Not Inserted.....plz try again....');</script>";
       }   
    }
    ?>


    <?php
        // session_start();
        include('connect.php');
        $con = mysqli_connect("localhost", "root", "", "tcc");
        error_reporting(0);
        if (isset($_POST['sendd'])) {
        // $user_id = $_SESSION['user_id'];
        $email = $_POST['email'];
        $otp = rand(999, 9999);
        $_SESSION['otp']=$otp;
        $q = mysqli_query($con, "select * from registration where email='$email' ");
        $cnt  = mysqli_num_rows($q);
        $to = $_POST['email'];
        // $_SESSION['email'] = $email;
        $subject = "RECOVERY OTP MAIL";
        // $message = "<p>Your verification code is: ' . $otp . '</b></p>'";
        $message = "Recovery otp for your account is $otp ";
        $from = "totalcarcare5@gmail.com";
        $headers = "From : $from";
        if ($cnt > 0) {

            if (mail($to, $subject, $message, $headers)) {
                echo "<script>alert('Check Your E-mail For Valid OTP');</script>";
                echo "<script>window.location.assign('forgot_otp.php?email=$email')</script>";
            } else {
                echo "<script>alert('Your mail has not send!');</script>";
            }
        } else {
            echo "<script>alert('Your email id is not registred ');</script>";
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
                                            Please Enter Your Information
                                        </h4>

                                        <div class="space-6"></div>

                                        <form method="POST" action="" enctype="multipart/form-data" name="myform">
                                            <fieldset>

                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="text" name="aname" class="form-control"
                                                            placeholder="Admin_name" required />
                                                        <i class="ace-icon fa fa-user"></i>
                                                    </span>
                                                </label>

                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="password" name="password" class="form-control"
                                                            placeholder="Password" required />
                                                        <i class="ace-icon fa fa-lock"></i>
                                                    </span>
                                                </label>

                                                <div class="space"></div>

                                                <div class="clearfix">
                                                    <label class="inline">
                                                        <!-- <input type="checkbox" class="ace" /> -->
                                                        <span class="lbl"> </span>
                                                    </label>

                                                    <button type="submit" name="login"
                                                        class="width-35 pull-right btn btn-sm btn-primary">
                                                        <i class="ace-icon fa fa-key"></i>
                                                        <span class="bigger-110">Login</span>
                                                    </button>
                                                </div>

                                                <div class="space-4"></div>
                                            </fieldset>
                                        </form>

                                        <div class="social-or-login center">
                                            <!-- <span class="bigger-110">Or Login Using</span> -->
                                        </div>

                                        <div class="space-6"></div>

                                        <div class="social-login center">
                                            <!-- <a class="btn btn-primary" href="https://facebook.com" target="_blank">
                                                <i class="ace-icon fa fa-facebook"></i>
                                            </a>

                                            <a class="btn btn-info" href="https://twitter.com" target="_blank">
                                                <i class="ace-icon fa fa-twitter"></i>
                                            </a>

                                            <a class="btn btn-danger" href="https://accounts.google.com"
                                                target="_blank">
                                                <i class="ace-icon fa fa-google"></i>
                                            </a> -->
                                        </div>
                                    </div><!-- /.widget-main -->

                                    <div class="toolbar clearfix">
                                        <div>
                                            <a href="#" data-target="#forgot-box" class="forgot-password-link">
                                                <i class="ace-icon fa fa-arrow-left"></i>
                                                I forgot my password
                                            </a>
                                        </div>

                                        <div>
                                            <a href="#" data-target="#signup-box" class="user-signup-link">
                                                <!-- I want to register -->
                                                <!-- <i class="ace-icon fa fa-arrow-right"></i> -->
                                            </a>
                                        </div>
                                    </div>
                                </div><!-- /.widget-body -->
                            </div><!-- /.login-box -->

                            <div id="forgot-box" class="forgot-box widget-box no-border">
                                <div class="widget-body">
                                    <div class="widget-main">
                                        <h4 class="header red lighter bigger">
                                            <i class="ace-icon fa fa-key"></i>
                                            Retrieve Password
                                        </h4>

                                        <div class="space-6"></div>
                                        <p>
                                            Enter your email and to receive instructions
                                        </p>

                                        <form method="POST" action="" name="">
                                            <fieldset>
                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="email" name="email" id="email" class="form-control"
                                                            placeholder="Enter Registered Email" required />
                                                        <i class="ace-icon fa fa-envelope"></i>
                                                    </span>

                                                </label>

                                                <div class="clearfix">

                                                    <input type="submit" name="sendd" id="sendd"
                                                        class="width-35 pull-right btn btn-sm btn-danger"
                                                        value="Send Me!">
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div><!-- /.widget-main -->

                                    <div class="toolbar center">
                                        <a href="#" data-target="#login-box" class="back-to-login-link">
                                            Back to login
                                            <i class="ace-icon fa fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div><!-- /.widget-body -->
                            </div>

                            <div id="signup-box" class="signup-box widget-box no-border">
                                <div class="widget-body">
                                    <div class="widget-main">
                                        <h4 class="header green lighter bigger">
                                            <i class="ace-icon fa fa-users blue"></i>
                                            New User Registration
                                        </h4>

                                        <div class="space-6"></div>
                                        <p> Enter your details to begin: </p>

                                        <form method="POST" action="" enctype="multipart/form-data" name="myform"
                                            onsubmit="return vali()">
                                            <fieldset>

                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="text" name="aname" class="form-control"
                                                            placeholder="Admin_name" required />
                                                        <i class="ace-icon fa fa-user"></i>
                                                    </span>
                                                </label>
                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="text" name="phone" class="form-control"
                                                            placeholder="Phone_no" required />
                                                        <i class="ace-icon fa fa-phone"></i>
                                                    </span>
                                                </label>
                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="email" name="email" class="form-control"
                                                            placeholder="Email" required />
                                                        <i class="ace-icon fa fa-envelope"></i>
                                                    </span>
                                                </label>


                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="password" name="password" id="password"
                                                            class="form-control" placeholder="Password" required />
                                                        <i class="ace-icon fa fa-lock"></i>
                                                    </span>
                                                </label>

                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="password" name="conpassword2" id="conpassword"
                                                            class="form-control" placeholder="Confirm_password"
                                                            onchange="chk()" required required />
                                                        <i class="ace-icon fa fa-retweet"></i>
                                                    </span>
                                                </label>

                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="file" name="photo" class="form-control"
                                                            placeholder="Photo" required />
                                                        <i class="ace-icon fa fa-photo"></i>
                                                    </span>
                                                </label>

                                                <label class="block">
                                                    <input type="checkbox" class="ace" />
                                                    <span class="lbl">
                                                        I accept the
                                                        <a href="https://www.google.com">User Agreement</a>
                                                    </span>
                                                </label>

                                                <div class="space-24"></div>

                                                <div class="clearfix">
                                                    <button type="reset" class="width-30 pull-left btn btn-sm">
                                                        <i class="ace-icon fa fa-refresh"></i>
                                                        <span class="bigger-110">Reset</span>
                                                    </button>

                                                    <span class="bigger-110"></span>
                                                    <input type="submit" name="submit"
                                                        class="width-65 pull-right btn btn-sm btn-success">
                                                    <!-- <span class="bigger-110">Register</span>

															<i class="ace-icon fa fa-arrow-right icon-on-right"></i> -->
                                                    <!-- </button> -->
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>

                                    <div class="toolbar center">
                                        <a href="#" data-target="#login-box" class="back-to-login-link">
                                            <i class="ace-icon fa fa-arrow-left"></i>
                                            Back to login
                                        </a>
                                    </div>
                                </div><!-- /.widget-body -->
                            </div><!-- /.signup-box -->
                        </div><!-- /.position-relative -->


                    </div>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.main-content -->
    </div><!-- /.main-container -->

    <!-- basic scripts -->

    <!--[if !IE]> -->
    <script src="assets/js/jquery-2.1.4.min.js"></script>

    <!-- <![endif]-->

    <!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
    <script type="text/javascript">
    if ('ontouchstart' in document.documentElement) document.write(
        "<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
    </script>

    <!-- inline scripts related to this page -->
    <script type="text/javascript">
    jQuery(function($) {
        $(document).on('click', '.toolbar a[data-target]', function(e) {
            e.preventDefault();
            var target = $(this).data('target');
            $('.widget-box.visible').removeClass('visible'); //hide others
            $(target).addClass('visible'); //show target
        });
    });



    //you don't need this, just used for changing background
    jQuery(function($) {
        $('#btn-login-light').on('click', function(e) {
            $('body').attr('class', 'login-layout light-login');
            $('#id-text2').attr('class', 'grey');
            $('#id-company-text').attr('class', 'blue');

            e.preventDefault();
        });
        $('#btn-login-dark').on('click', function(e) {
            $('body').attr('class', 'login-layout');
            $('#id-text2').attr('class', 'grey');
            $('#id-company-text').attr('class', 'blue');

            e.preventDefault();
        });

        $('#btn-login-blur').on('click', function(e) {
            $('body').attr('class', 'login-layout blur-login');
            $('#id-text2').attr('class', 'white');
            $('#id-company-text').attr('class', 'light-blue');

            e.preventDefault();
        });

    });
    </script>
</body>

</html>