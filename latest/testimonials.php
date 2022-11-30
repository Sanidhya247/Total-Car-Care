<?php 
    include('h1.php');
    error_reporting(0);
?>

<style>
/* .home-p:after {
    top: 0;
    left: 0;
    z-index: -1;
    width: 100%;
    height: 100%;
    content: " ";
    position: absolute;
    background: rgba(0, 0, 0, 0.2);
} */

.home-p.pages-head2 {
    background: url(../img/img/tc.png) no-repeat;
    background-size: cover;
    background-position: center center;
}

#client {
    padding-bottom: 100px;
    background: #fff;
}

.client-cont {
    width: 400px;
    padding: 30px;
    background: #f0f0f0;
    margin: 0 auto;
    border-bottom: 5px solid #2196F3;
}
</style>
<!-- <a href="../latest/img/img/tc.png"></a> -->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Business Bootstrap Responsive Template</title>
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- Global Stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate/animate.min.css">
    <link rel="stylesheet" href="css/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Core Stylesheets -->
    <link rel="stylesheet" href="css/testimonials.css">
</head>

<body id="page-top">


    <!--====================================================
                    LOGIN OR REGISTER
======================================================-->
    <section id="login">
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" align="center">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="fa fa-times" aria-hidden="true"></span>
                        </button>
                    </div>
                    <div id="div-forms">
                        <form id="login-form">
                            <h3 class="text-center">Login</h3>
                            <div class="modal-body">
                                <label for="username">Username</label>
                                <input id="login_username" class="form-control" type="text"
                                    placeholder="Enter username " required>
                                <label for="username">Password</label>
                                <input id="login_password" class="form-control" type="password"
                                    placeholder="Enter password" required>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Remember me
                                    </label>
                                </div>
                            </div>
                            <div class="modal-footer text-center">
                                <div>
                                    <button type="submit" class="btn btn-general btn-white">Login</button>
                                </div>
                                <div>
                                    <button id="login_register_btn" type="button" class="btn btn-link">Register</button>
                                </div>
                            </div>
                        </form>
                        <form id="register-form" style="display:none;">
                            <h3 class="text-center">Register</h3>
                            <div class="modal-body">
                                <label for="username">Username</label>
                                <input id="register_username" class="form-control" type="text"
                                    placeholder="Enter username" required>
                                <label for="register_email">E-mailId</label>
                                <input id="register_email" class="form-control" type="text" placeholder="Enter eMail"
                                    required>
                                <label for="register_password">Password</label>
                                <input id="register_password" class="form-control" type="password"
                                    placeholder="Password" required>
                            </div>
                            <div class="modal-footer">
                                <div>
                                    <button type="submit" class="btn btn-general btn-white">Register</button>
                                </div>
                                <div>
                                    <button id="register_login_btn" type="button" class="btn btn-link">Log
                                        In</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====================================================
                       HOME-P
======================================================-->
    <div id="home-p" class="home-p pages-head8 text-center">
        <div class="container">
            <h1 class="wow fadeInUp" data-wow-delay="0.1s">We define our Success by your results</h1>
            <p>Customer View</p>
        </div>
        <!--/end container-->
    </div>


    <!--====================================================
                      TESTIMONIALS-P2
======================================================-->


    <section id="client" class="client testimonials-p2">
        <div class="container">
            <div class="row">
                <?php 
                    include('connect.php');
                    $q=mysqli_query($con,"select * from testimonials");
                    while($row=mysqli_fetch_array($q))
                    { 
                ?>
                <div class="col-md-6 col-sm-12">
                    <div class="client-cont">
                        <!-- <img src="img/client/avatar-6.jpg" class="img-fluid" alt=""> -->
                        <?php echo "<img src='../latest/img/$row[photo]' class='img-fluid'>";?>
                        <!-- <?php echo "<img src='/img/$row[photo]'>"; ?> -->
                        <h5><?php echo "$row[name]";?></h5>
                        <h6><?php echo "$row[occupation]";?></h6>
                        <i class="fa fa-quote-left"></i>
                        <p><?php echo "$row[comment]";?></p>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
        <br>
        <hr>

        <br>
        <br>
        <?php
        include('connect.php');
        if(isset($_POST['submit']))
        {
            $name=$_POST['name'];
            $email=$_POST['email'];
            $occupation=$_POST['occupation'];
            $file_name=$_FILES["photo"]["name"];
			$file_temp=$_FILES["photo"]["tmp_name"];
            $comment=$_POST['comment'];
           
           $q=mysqli_query($con,"insert into testimonials values('','$name','$email','$occupation','$file_name','$comment')");

            if($q)
            {
				move_uploaded_file($file_temp,"img/".$file_name);
                echo "<script>alert('Your valuable testimonials is get us ..Thank You so much......');</script>";
                header("location:testimonials.php");

            }
            else
            {
                 echo "<script>alert('Not Inserted.....plz try again....');</script>";
            }   
            
        }
    ?>
        <section id="single-news-p1" class="single-news-p1">
            <div class="container">
                <div class="row">
                    <!-- left news details -->
                    <div class="col-md-8">
                        <div class="single-news-p1-cont">
                            <div class="single-news-desc">
                                <form method="POST" action="" enctype="multipart/form-data">

                                    <div class="comment-box-sn">
                                        <h5>Leave a Reply</h5>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="name">Full Name</label>
                                                <input type="text" class="form-control" name="name" id="name"
                                                    placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="email">Email Address</label>
                                                <input type="email" class="form-control" name="email" id="email"
                                                    placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="name">Occupation</label>
                                                <input type="text" class="form-control" name="occupation"
                                                    id="occupation" placeholder="Occupation">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="email">Photo</label>
                                                <input type="file" class="form-control" name="photo" id="photo"
                                                    placeholder="Photo">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="#">Comment</label>
                                                <textarea name="comment" class="form-control" id="comment" cols="30"
                                                    rows="4" placeholder="Comment"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <!-- <div class="submitting"></div> -->
                                                <input type="submit" name="submit" class="btn btn-primary" id="submit"
                                                    value="Send Comment">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

</body>
</section>

</html>
<?php 
    // include('f1.php');
?>