<!doctype html>
<html lang="en">

<head>
    <title>Total car care</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">
    <script>
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
	$con = mysqli_connect("localhost","root","","tcc");
	error_reporting(0);
	if (isset($_POST['login'])) 
    {
		$email = $_POST['email'];
		$password = $_POST['password'];

		$q = mysqli_query($con, "select * from user_registration where email='$email' and password='$password' and status=1");
		$row = mysqli_fetch_array($q);
		$cnt  = mysqli_num_rows($q);

		if ($cnt > 0) {
			$_SESSION['uid'] = $row['uid'];
			$_SESSION['uname'] = $row['uname'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['phone'] = $row['phone'];
			echo "<script>alert('login successfully');</script>";
			header("location:../index.php");
		} else {
			echo "<script>alert('Invalid User');</script>";
		}
	}
	?>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">WELCOME</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Log In</h3>
                        <form method="POST" enctype="multipart/form-data" class="signin-form">
                            <div class="form-group">
                                <input type="text" name="email" id="email" class="form-control" placeholder="Email"
                                    required>
                                <!-- <span id=email_error></span> -->
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control"
                                    onclick="clickEyeButton('password')" placeholder="Password" required>
                                <span toggle="#password-field"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="login" class="form-control btn btn-primary submit px-3">log
                                    In</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">Remember Me
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="forgotpassword.php" style="color: #fff">Forgot Password?</a>
                                </div>
                            </div>
                        </form>
                        <p class="w-100 text-center">&mdash; Not A Member? &mdash;</p>
                        <div class="social d-flex text-center">
                            <a href="registration.php" class="px-2 py-2 mr-md-1 rounded"></span>Register Now </a>
                            <!-- <a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a> -->
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