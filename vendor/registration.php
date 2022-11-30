<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Registration Page - Vendor</title>

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
        var vname = myform.vname.value;
        var letters = /^[\w'\-,.][^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,}$/;
        // var code=frm.txtcode.value;
        var phone = myform.phone.value;
        // if (no=='' || isNaN(no))
        // alert("enter valid emp no");
        if (vname == "" || !letters.test(vname)) {

            alert("Enter Valid Vendor Name");

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

                            <h4 class="blue" id="id-company-text"><img src="tp.png" height="120" width="300">
                        </div>

                        <div class="space-6"></div>
                        <div class="widget-body">

                            <div class="widget-main">
                                <a href="index.php">
                                    <h5 class="header green lighter bigger" style="margin-left: 290px;">
                                        <!-- <i class="ace-icon fa fa-users blue"></i> -->
                                        LOG IN
                                    </h5>
                                </a>

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
                                                <input type="number" name="phone" class="form-control"
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
                                                    class="form-control" placeholder="Confirm_password" onchange="chk()"
                                                    required required />
                                                <i class="ace-icon fa fa-retweet"></i>
                                            </span>
                                        </label>

                                        <label class="block clearfix">
                                            <span class="block input-icon input-icon-right">
                                                <input type="text" name="city" class="form-control" placeholder="City"
                                                    required />
                                                <i class="ace-icon fa fa-user"></i>
                                            </span>
                                        </label>

                                        <label class="block clearfix">
                                            <span class="block input-icon input-icon-right">
                                                <input type="file" name="photo" class="form-control" placeholder="Photo"
                                                    required />
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
                                            <button type="reset" class="width-40 pull-left btn btn-sm">
                                                <i class="ace-icon fa fa-refresh"></i>
                                                <span class="bigger-110">Reset</span>
                                            </button>

                                            <span class="bigger-110"></span>
                                            <input type="submit" name="submit"
                                                class="width-40 pull-right btn btn-sm btn-success">
                                            <!-- <span class="bigger-110">Register</span>

															<i class="ace-icon fa fa-arrow-right icon-on-right"></i> -->
                                            <!-- </button> -->
                                        </div>
                                    </fieldset>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.main-content -->
    </div><!-- /.main-container -->


</body>

</html>