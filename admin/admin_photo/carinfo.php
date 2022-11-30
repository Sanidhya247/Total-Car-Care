<?php
    include('h1.php');
?>
<!--
author: Boostraptheme
author URL: https://boostraptheme.com
License: Creative Commons Attribution 4.0 Unported
License URL: https://creativecommons.org/licenses/by/4.0/
-->
<style>
/* .home-p.pages-head3 {
    background: url(../img/img/audi1.png) no-repeat;
    background-size: cover;
    background-position: center center;
} */

.home-p.pages-head3 {
    background: url(../img/img/audi.png) no-repeat;
    background-size: cover;
    background-position: center center;
}
</style>
<!-- <a href="../latest/img/audi1.png"></a> -->
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
    <link rel="stylesheet" href="css/single-product.css">
    <link rel="stylesheet" href="css/shop.css">
</head>

<body id="page-top">









    <!--====================================================
                       HOME-P
======================================================-->
    <div id="home-p" class="home-p pages-head3 text-center">
        <div class="container">
            <h1 class="wow fadeInUp" data-wow-delay="0.1s">Shoping Box</h1>
        </div>
        <!--/end container-->
    </div>

    <!--====================================================
                  SINGLE-PRODUCT-P1
======================================================-->
    <section id="single-product-p1">
        <?php
         include('connect.php');
         $car_id=$_GET['x'];
        //  $q=mysqli_query($con,"select * from car_model where car_id=$car_id");
         $q=mysqli_query($con,"select bm.*,cm.*,cmd.*,cd.* from brand_master bm,car_master cm,car_model cmd,car_details cd where bm.brand_id=cm.brand_id and cm.car_id=cmd.car_id and cmd.car_model_id=cd.car_model_id and cd.car_id=$car_id ");
         while($row=mysqli_fetch_array($q))
         {   
        ?>
        <div class="container">
            <div class="wrapper row">
                <div class="preview col-md-6">

                    <div class="preview-pic tab-content">
                        <!-- <div class="tab-pane active" id="pic-1"><img src="img/shop/shop-item-1.jpg" /></div> -->
                        <div class="tab-pane active" id="pic-1">
                            <?php echo "<img src='../vendor/img/$row[car_model_front_photo]'>";?></div>
                        <!-- <div class="tab-pane" id="pic-2"><img src="img/shop/shop-item-3.jpg" /></div> -->
                        <div class="tab-pane" id="pic-2">
                            <?php echo "<img src='../vendor/img/$row[car_model_rear_photo]'>";?></div>
                        <!-- <div class="tab-pane" id="pic-3"><img src="img/shop/shop-item-4.jpg" /></div> -->
                        <div class="tab-pane" id="pic-3">
                            <?php echo "<img src='../vendor/img/$row[car_model_interior_photo]'>";?></div>
                        <!-- <div class="tab-pane" id="pic-4"><img src="img/shop/shop-item-5.jpg" /></div> -->
                        <div class="tab-pane" id="pic-4">
                            <?php echo "<img src='../vendor/img/$row[car_model_side_photo]'>";?></div>
                        <!-- <div class="tab-pane" id="pic-5"><img src="img/shop/shop-item-2.jpg" /></div> -->
                    </div>
                    <ul class="preview-thumbnail nav nav-tabs">
                        <li class="active"><a data-target="#pic-1" data-toggle="tab">
                                <?php echo "<img src='../vendor/img/$row[car_model_front_photo]'>";?></a></li>
                        <li><a data-target="#pic-2"
                                data-toggle="tab"><?php echo "<img src='../vendor/img/$row[car_model_rear_photo]'>";?></a>
                        </li>
                        <li><a data-target="#pic-3" data-toggle="tab">
                                <?php echo "<img src='../vendor/img/$row[car_model_interior_photo]'>";?></a></li>
                        <li><a data-target="#pic-4"
                                data-toggle="tab"><?php echo "<img src='../vendor/img/$row[car_model_side_photo]'>";?></a>
                        </li>
                        <li><a data-target="#pic-5"
                                data-toggle="tab"><?php echo "<img src='../vendor/img/$row[car_model_front_photo]'>";?></a>
                        </li>
                    </ul>
                </div>
                <div class="details col-md-6">
                    <h6 class="price">Model Name :- &nbsp;&nbsp;<span><?php echo "$row[car_model_name]";?></span></h6>
                    <!-- <div class="rating">
                        <div class="stars">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <span class="review-no">4 reviews</span>
                    </div> -->
                    <!-- <p class="product-description">Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia
                        sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p> -->
                    <h6 class="price">Model Year :- &nbsp;&nbsp;&nbsp;<span><?php echo "$row[car_model_year]";?></span>
                    </h6>
                    <h6 class="price">Fuel Type :-
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo "$row[fuel_type]";?></span>
                    </h6>
                    <h6 class="price">Engine CC :- &nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo "$row[engine_cc]";?>CC</span></h6>
                    <h6 class="price">Colour :- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo "$row[colour]";?></span></h6>
                    <h6 class="price">Seats :- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo "$row[seat]";?></span></h6>
                    <h6 class="price">Price :-
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>&#8377;<?php echo "$row[price]";?></span>
                    </h6>


                    <div class="action">
                        <div class="title-but"><button class="btn btn-general btn-white" role="button">
                                <?php echo "<a href='testdrive/testdrive.php?x=$row[brand_name]&y=$row[car_name]' style='color:black;' ><i class='fa fa-car' style='color:black;'></i> GET TEST DRIVE</a>"; ?>
                            </button></div>
                    </div>
                </div>

            </div>
            <?php }?>
    </section>

    <br>
    <br>
    <br>




    <!--Global JavaScript -->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/popper/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/wow/wow.min.js"></script>
    <script src="js/owl-carousel/owl.carousel.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery-easing/jquery.easing.min.js"></script>

    <script src="js/custom.js"></script>
</body>

</html>
<?php
    include('f1.php');
?>