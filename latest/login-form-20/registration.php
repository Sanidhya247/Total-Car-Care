<!doctype html>
<html lang="en">

<head>
    <title>Book Your Ride User Log IN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">

    <script>
    function chk() {
        var a = document.getElementById("password").value;
        var b = document.getElementById("conpassword").value;
        if (a != b)
            alert('password does not match');
    }

    function vali() {

        // var no=frm.txtno.value;201.3
        var uname = myform.uname.value;
        var letters = /^[\w'\-,.][^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,}$/;
        // var code=frm.txtcode.value;
        var phone = myform.phone.value;
        // if (no=='' || isNaN(no))
        // alert("enter valid emp no");
        if (uname == "" || !letters.test(uname)) {

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


<body class="img js-fullheight" style="background-image: url(images/car4.jpg);">

    <?php
    session_start();
    $con = mysqli_connect("localhost", "root", "", "tcc");
    error_reporting(0);
    if (isset($_POST['register'])) {

        $uname = $_POST['uname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $conpassword = $_POST['conpassword'];
        $phone = $_POST['phone'];
        $otp = rand(999, 9999);
        $status = $_POST['status'];

        $to = $_POST['email'];
        $_SESSION['email'] = $email;
        $subject = "OTP VALIDATION";
        $message = "Heloooo !!

        Below is your one time passcode: Do not share it with anyone .
                
        $otp
                
        Use the above verification code. If you are having any issues with your account. Please don't hesitate to contact us by replying to this email.
                
        Regards ,
        Team Total car care'";
        $from = "totalcarcare5@gmail.com";
        $headers = "From : $from";



        $q = mysqli_query($con,"insert into user_registration values('','$uname','$email','$password','$phone','$otp','0')");
        if ( $q) {
            mail($to, $subject, $message, $headers);
            echo "<script>alert('OTP Sended...');</script>";
            echo "<script>window.location.assign('otp.php')</script>";
        } else {
            echo "<script>alert('Not Sended...');</script>";
        }
    }
    ?>


    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">REGISTRATION FORM</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <!-- <h3 class="mb-4 text-center">Have an account?</h3> -->
                        <form name="myform" method="POST" enctype="multipart/form-data" class="signin-form"
                            onsubmit="return vali()">
                            <div class="form-group">
                                <input type="text" name="uname" id="uname" class="form-control" placeholder="Username"
                                    required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" placeholder="E-mail ID"
                                    required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Contact No"
                                    required>
                            </div>
                            <div class="form-group">
                                <input id="password" type="password" name="password" class="form-control"
                                    onclick="clickEyeButton('password')" placeholder="Password" required>
                                <span toggle="#password-field"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <input id="conpassword" type="conpassword" name="conpassword" class="form-control"
                                    onclick="clickEyeButton('conpassword')" placeholder="Re-Enter Password"
                                    onchange="chk()" required>
                                <span toggle="#password-field"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>

                            <div class="form-group">
                                <button type="submit" name="register"
                                    class="form-control btn btn-primary submit px-3">Register</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">Remember Me
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="#" style="color: #fff">Forgot Password</a>
                                </div>
                            </div>
                        </form>
                        <p class="w-100 text-center">&mdash; Already Have An Account? &mdash;</p>
                        <div class="social d-flex text-center">
                            <a href="login.php" class="px-2 py-2 mr-md-1 rounded"></span> Log In Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>