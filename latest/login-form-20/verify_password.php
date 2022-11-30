<!doctype html>
<html lang="en">

<head>
    <title>Total Car Care User Log IN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body class="img js-fullheight" style="background-image: url(images/car.jpg);">

    <?php
    session_start();

	$con = mysqli_connect("localhost","root","","tcc");

    if (isset($_POST['submit'])) {

      // echo "$_SESSION[aid]";

        $password = $_POST["password"];
        $uid = $_SESSION['uid'];
        //echo $email;
        $q = mysqli_query($con, "select * from user_registration where uid=$uid");
        // echo "select * from registration where aid=$aid";

        $row = mysqli_fetch_array($q);
        $password = $row['password'];  //old
        $password1 = $_POST["password"];   //new
        if ($password == $password1) {
            
            echo "<script>window.location.assign('reset_password.php'); </script>";
        } else {
            echo "<script>alert('You entered an incorrect password');</script>";
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
                        <h3 class="mb-4 text-center">Reset Password</h3>
                        <h6 class="mb-20" style=" margin-left: 24px;">Enter your current password and submit</h6>

                        <form method="POST" enctype="multipart/form-data" class="signin-form">
                            <div class="form-group">
                                <input type="text" name="password" id="password" class="form-control"
                                    placeholder="Current Password" required>
                                <!-- <span id=email_error></span> -->
                            </div>
                            <div class="text-center d-flex">
                                <input type="submit" name="submit" class="form-control btn btn-primary submit px-3"
                                    value=submit>
                            </div>

                        </form>

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