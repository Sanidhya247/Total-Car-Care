<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Login Page - Vendor</title>

    <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- text fonts -->
    <link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="assets/css/ace.min.css" />

    <!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" />
		<![endif]-->
    <link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

    <!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->


    <script>
    function vali() {

        // var no=frm.txtno.value;201.3
        var vname = myform.vname.value;
        var letters = /^[\w'\-,.][^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,}$/;
        // var code=frm.txtcode.value;
        var phone = myform.phone.value;
        // if (no=='' || isNaN(no))
        // alert("enter valid emp no");
        if (vname == "" || !letters.test(vname)) {

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

    }

    function clickEyeButton(type) {
        if (type === "password") {
            const ele = document.getElementById("password");

            if (ele.type === "password") ele.type = "text";
            else ele.type = "password"
        } else {
            const ele = document.getElementById("conpassword");

            if (ele.type === "password") ele.type = "text";
            else ele.type = "password";
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
        $vname=$_POST['vname'];
        $password=$_POST['password'];

        $q=mysqli_query($con,"select * from vendor_master where vname='$vname' and password='$password' and status=1 ");
		$row=mysqli_fetch_array($q);
		$pic=$row[7];
		$em=$row[3];
		$ph=$row[2];
		$cnt  = mysqli_num_rows($q);

        if($cnt>0)
        {
            echo "<script>alert('login successfully......');</script>";
			$_SESSION['vid']=$row[0];
			$_SESSION['vname'] = $vname;
			$_SESSION['pic'] = $pic;
            $_SESSION['em']=$em;
            $_SESSION['ph']=$ph;
            header("location:dashboard.php");
        }
        else
        {
            echo "<script>alert('invalid vendor....');</script>";
        }
    }
    ?>

    <?php
    $con=mysqli_connect("localhost","root","","tcc");
 
    if(isset($_POST['submit']))
    {
        
        $vname=$_POST['vname'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $conpassword2=$_POST['conpassword2'];
        $city=$_POST['city'];
        //$photo=$_POST['photo'];

		$file_name=$_FILES["photo"]["name"];
		$file_temp=$_FILES["photo"]["tmp_name"];
		
		$photo=$_FILES["photo"]["name"];
   		$dst="./admin_photo/".$photo;
        

        $q=mysqli_query($con,"insert into vendor_master values('','$vname','$phone','$email','$password','$conpassword2','$city','$file_name',0)");
        if($q)
        {
              move_uploaded_file($file_temp,"img/".$file_name);
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
        // error_reporting(0);
        if (isset($_POST['sendd'])) 
        {
        
       
        
        $email = $_POST['email'];
        $otp = rand(999, 9999);
        $_SESSION['otp']=$otp;
        $q2= mysqli_query($con, "select * from vendor_master where email='$email' ");
        $cnt  = mysqli_num_rows($q2);
        $to = $_POST['email'];
        $subject = "RECOVERY OTP MAIL";
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

        } else 
        {
            echo "<script>alert('Your email id is not registred ');</script>";
        }
        // echo "hiii";
    }
    ?>




    <div class="main-container">
        <div class="main-content">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="login-container">
                        <div class="center">
                            <h1>

                            </h1>
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

                                        <form method="POST" action="" enctype="multipart/form-data">
                                            <fieldset>

                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="text" name="vname" class="form-control"
                                                            placeholder="Vendor_name" required />
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
                                                        <!-- <span class="lbl"> Remember Me</span> -->
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
                                            <a href="registration.php" class="user-signup-link">
                                                I want to register
                                                <i class="ace-icon fa fa-arrow-right"></i>
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

                                        <form method="POST" action="">
                                            <fieldset>
                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="email" class="form-control" placeholder="Email"
                                                            required />
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
                                                        <input type="text" name="vname" class="form-control"
                                                            placeholder="Vendor_name" required />
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
                                                        <input type="password" name="password" class="form-control"
                                                            onclick="clickEyeButton('password')" placeholder="Password"
                                                            required />
                                                        <i class="ace-icon fa fa-lock"></i>
                                                        <!-- <i class="fa fa-fw fa-eye field-icon toggle-password"></i> -->
                                                    </span>
                                                </label>

                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="password" name="conpassword2" class="form-control"
                                                            onclick="clickEyeButton('conpassword')"
                                                            placeholder="Confirm_password" required />
                                                        <i class="ace-icon fa fa-retweet"></i>
                                                    </span>
                                                </label>

                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="city" name="city" class="form-control"
                                                            placeholder="city" required />
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
                                                        <a href="#">User Agreement</a>
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