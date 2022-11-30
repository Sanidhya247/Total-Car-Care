<?php

    include("h1.php");

?>

<style>
.carousel-fade {
    height: 90vh;
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    background-image: url(img/home.jpg);
}

#myVideo {
    /* position: fixed;
    right: 0;
    bottom: 0;
    min-width: 100%;
    min-height: 100%; */
    border-radius: 10px;
    margin-top: 44px;
    margin-left: 95px;
    height: 370px;
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;

}

#parts {
    background-image: linear-gradient(to right, #ffffff, #d3dde5);

}

#acc {
    background-image: linear-gradient(to right, #d3dde5, #ffffff);
}




/* <!--====================================================
                         Featers css
======================================================--> */
.grid-container {
    display: grid;
    grid-template-columns: auto auto auto auto;
    /* background-color: #2196F3; */
    padding: 10px;
}

.grid-item {
    background-color: rgba(255, 255, 255, 0.8);
    /* border: 1px solid rgba(0, 0, 0, 0.8); */
    padding: 10px;
    padding-left: 50px;
    padding-right: 50px;
    font-size: 20px;
    text-align: center;
}

.covid {
    margin: left 40px;
}

/*
<!--====================================================
Featers css end
======================================================--> */
/*

<!--====================================================
old car css
======================================================--> */

element.style {
    visibility: visible;
    animation-delay: 0.3s;
    animation-name: fadeInUp;
}

.project-p2 .project-p2-cont .project-p2-desc {
    position: absolute;
    overflow: visible;
    margin-top: 15%;
    margin-left: 10%;
    background: #b0daff96;
    padding: 20px;
}

/*
<!--====================================================
old car css end
======================================================--> */

/*
<!--====================================================
CAR parts aessc css start
======================================================--> */

.card {
    position: relative;
    padding: 0;
    margin: 0 !important;
    border-radius: 20px;
    overflow: hidden;
    max-width: 280px;
    max-height: 340px;
    cursor: pointer;
    border: none;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2)
}

.card .card-image {
    width: 100%;
    max-height: 340px
}

.card .card-image img {
    width: 100%;
    max-height: 340px;
    object-fit: cover
}

.card .card-content {
    position: absolute;
    bottom: -180px;
    color: #fff;
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(15px);
    min-height: 10px;
    width: 100%;
    transition: bottom .4s ease-in;
    box-shadow: 0 -10px 10px rgba(255, 255, 255, 0.1);
    border-top: 1px solid rgba(255, 255, 255, 0.2)
}

.card:hover .card-content {
    bottom: 0px
}

.card:hover .card-content h4,
.card:hover .card-content h5 {
    transform: translateY(10px);
    opacity: 1
}

.card .card-content h4,
.card .card-content h5 {
    font-size: 1.1rem;
    text-transform: uppercase;
    letter-spacing: 3px;
    text-align: center;
    transition: 0.8s;
    font-weight: 500;
    opacity: 0;
    transform: translateY(-40px);
    transition-delay: 0.2s
}

.card .card-content h5 {
    transition: 0.5s;
    font-weight: 200;
    font-size: 0.8rem;
    letter-spacing: 2px
}

/* .card .card-content .social-icons {
    list-style: none;
    padding: 0
} */

.card .card-content .social-icons li {
    margin: 10px;
    transition: 0.5s;
    transition-delay: calc(0.15s * var(--i));
    transform: translateY(50px)
}

.card:hover .card-content .social-icons li {
    transform: translateY(20px)
}

/*
<!--====================================================
car parts access css end
======================================================--> */

/*
<!--====================================================
Testimonials css end
======================================================--> */


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

#font {
    font-family: 'Aldrich';
    font-size: 29px;
}


/*
<!--====================================================
Testimonials end
======================================================--> */
</style>

<html>

<head>

    <link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet'>


</head>

<body>


    <div>

        <!--====================================================
                         HOME
======================================================-->

        <section id="home">
            <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">

                <!-- Carousel items -->
                <div class="carousel-inner">
                    <div class="carousel-item active slides">
                        <div class="overlay"></div>
                        <div class="slide-1"></div>
                        <div class="hero ">
                            <hgroup class="wow fadeInUp">
                                <h1>We Will <span><a href="" class="typewrite" data-period="2000"
                                            data-type='[ " Fix It", " Build It"]'>
                                            <span class="wrap"></span></a></span> </h1>
                                <h3>Always Best in a worst time!!</h3>
                            </hgroup>
                            <a href='../latest/booking/booking.php'><button
                                    class="btn btn-general btn-green wow fadeInUp" role="button">BOOK
                                    SERVICE</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====================================================
                         HOME END
======================================================-->

        <!--====================================================
                         services
======================================================-->

        <section id="home">
            <div class="row" style="margin-top: 20px;">
                <div class="col-lg-6 text-center text-lg-start">
                    <div class="service-himg" margin="10px" ;>
                        <!-- <iframe src="../latest/img/home1.mp4"
                        frameborder="0" allowfullscreen></iframe> -->

                        <video autoplay muted loop id="myVideo">
                            <source src="../latest/img/home1.mp4" type="video/mp4">
                        </video>

                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-start">
                    <h2 style="margin-top: 100px;" id="font"><strong> Car Services We Provide </strong>
                        <hr style="margin-left: 252px;margin-right: 227px;border-width: 4px;background: #007bff;">
                    </h2>
                    <p style="font-size:22px; margin-left: 80px; margin-right: 80px; margin-top: 40px;">Find the best
                        service packages for your car. Select from a wide range of car
                        repairs & services, from
                        general service, car wash, accidental repair to custom repairs, painting and much more.</p>
                    <a href='service.php'><button class="btn btn-primary wow fadeInUp" role="button">View
                            Services</button></a>

                </div>
            </div>
        </section>
        <!--====================================================
                         services END
======================================================-->


        <!--====================================================
                         Features
======================================================-->
        <br>
        <br>
        <br>
        <h3 class="title-w3 title-w3-3 mb-sm-5 mb-4 text-dark font-weight-bold wow fadeInUp" align="left" id="font"
            margin-left:="" 46px;="" style="visibility: visible;animation-name: fadeInUp;margin-left: 46px;"> Total
            Car Care
            Features</h3>
        <!-- <div class="heading-border"></div> -->
        <hr style="
    margin-top: -66px;
    background: #007bff;
    margin-left: 478px;
    margin-right: 854px;
    border-width: 3px;
">
        <br><br>
        <div class="grid-container">
            <div class="grid-item"><img src="../latest/img/11.png"></div>
            <div class="grid-item"><img src="../latest/img/22.png"></div>
            <div class="grid-item"><img src="../latest/img/33.png"></div>
            <div class="grid-item"><img src="../latest/img/44.png"></div>
            <div class="grid-item"><strong> Reliable And Affordable </strong></div>
            <div class="grid-item"><strong>Experienced And Trained</strong></div>
            <div class="grid-item"><strong>Quality Repairs</strong></div>
            <div class="grid-item"><strong>Customizable Scheduling</strong></div>
            <div class="grid-item">
                Total Car Care expert mechanics will meet your vehicle service needs at an affordable rate.
                Our affordable prices will satisfy any budget without compromising quality.
            </div>
            <div class="grid-item">Total Car Care has been servicing cars since , so we've seen it all! We are
                equipped to
                handle any situation whether it's a routine oil change or an emergency on the side of the road.</div>
            <div class="grid-item">We make sure our customers feel confident about their vehicles after we complete a
                repair or
                any other service on their vehicle.</div>
            <div class="grid-item">Search for a time slot near you and we'll give you a list of available time slots! No
                need to
                browse our schedule!</div>
        </div>
        <br>
        <br>

        <!--====================================================
                         Features END
======================================================-->
        <!-- covidDiv -->
        <div class="covid" style="
    background: #80808012;">
            <div class=" middle-w3l join-w3l1" id="covidDiv">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 p-5 py-3">
                            <h2 class="title-w3 text-dark title-w3-3 mb-sm-5 mb-4 font-weight-bold" id="font">Covid Free
                                Workshops</h2>
                            <hr style="
    border-width: 4px;
    margin-left: 401px;
    margin-right: 109px;
    margin-top: -66px;
    margin-bottom: 34px;
    background: #007bff;
">
                            <p class="mt-4" margin-left: 80px;>Be assured when booking servicing of your car with
                                VehicleCare. We take customer safety
                                as a priority and work to deliver a seamless experience, completely contactless and
                                safe.
                                All our
                                car service centers are sanitized regularly and follow rigorous precautionary
                                guidelines.
                            </p>
                            <!-- <a href="" class="btn btn-block button-style mt-sm-5 mt-5"> Custum Repairs</a> -->
                        </div>
                        <div class="col-lg-6 text-center banner-img">
                            <img height="400px" src="../latest/img/covid.jpg" class="bannerImg covidImg">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <!-- //covidDiv -->

        <!--====================================================
                       old Car 
======================================================-->
        <h3 id="font" class="title-w3 title-w3-3 mb-sm-5 mb-4 text-dark font-weight-bold wow fadeInUp" align="left"
            style="visibility: visible;animation-name: fadeInUp;margin-left: 46px;">
            Old Car</h3>
        <hr style="
    margin-top: -66px;
    background: #007bff;
    margin-left: 188px;
    margin-right: 1223px;
    border-width: 3px;
">
        <br><br>
        <section id="project-p2" class="project-p2" style="background: #a4cff1;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12" style="background-color: white;">
                        <div class="project-p2-cont">
                            <div class="col-md-5 col-sm-6">
                                <!-- <img src="../latest/img/project/m.png" height="600px" width="1448px" /> -->
                                <div class="project-p2-desc wow fadeInUp" data-wow-delay="0.3s"
                                    style="margin-top: 155px;    margin-left: 59px;    margin-right:58px;">
                                    <h4><strong> Are you willing to buy old car ? You have your foot right at place TCC
                                            presents you to buy old car and can also have your 1st test drive..</strong>
                                    </h4>
                                    <a href="carlogo.php" class="text-right"><i class="fa fa-arrow-circle-o-right"></i>
                                        See
                                        More</a>
                                </div>
                            </div>
                            <img src="img/project/am3.png" style="margin-left: 300px;height: 500px;" class="img-fluid"
                                alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <br><br>
        <!--====================================================
                       old Car end
======================================================-->


        <!--====================================================
                       Parts start
======================================================-->
        <h3 id="font" class="title-w3 title-w3-3 mb-sm-5 mb-4 text-dark font-weight-bold wow fadeInUp" align=left>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Car parts<h3>
                <hr style="
    margin-top: -66px;
    background: #007bff;
    margin-left: 237px;
    margin-right: 1180px;
    border-width: 3px;
">
                <br>
                <div id="parts">

                    <div class="container" style="padding-top: 50px ; ">
                        <div class="row">
                            <?php
                    include('connect.php');
                    $q=mysqli_query($con,"select * from car_parts_master where cpmid=7");
                    $row=mysqli_fetch_array($q)
                ?>
                            <div class="col-lg-3">

                                <div class="card p-0" style="height: 80%;">
                                    <div class="card-image">
                                        <?php    
                                echo "<img src='../admin/img/$row[photo]'> ";
                            ?>
                                    </div>
                                    <div class="card-content d-flex flex-column align-items-center">
                                        <h4 class="pt-2" style="color: #fff;">
                                            <?php 
                                    echo "<a href=carpartsmodel.php?x=$row[0]> $row[1]</a>";
                                ?></h4>
                                        <ul class="social-icons d-flex justify-content-center">

                                    </div>
                                </div>
                            </div>
                            <br>

                            <?php
                    include('connect.php');
                    $q=mysqli_query($con,"select * from car_parts_master where cpmid=13");
                    $row=mysqli_fetch_array($q)
                ?>
                            <div class="col-lg-3">

                                <div class="card p-0" style="height: 80%;">
                                    <div class="card-image">
                                        <?php    
                                echo "<img src='../admin/img/$row[photo]'> ";
                            ?>
                                    </div>
                                    <div class="card-content d-flex flex-column align-items-center">
                                        <h4 class="pt-2" style="color: #fff;">
                                            <?php 
                                    echo "<a href=carpartsmodel.php?x=$row[0]> $row[1]</a>";
                                ?></h4>
                                        <ul class="social-icons d-flex justify-content-center">

                                    </div>
                                </div>
                            </div>

                            <br>


                            <?php
                    include('connect.php');
                    $q=mysqli_query($con,"select * from car_parts_master where cpmid=11");
                    $row=mysqli_fetch_array($q)
                ?>
                            <div class="col-lg-3">

                                <div class="card p-0" style="height: 80%;">
                                    <div class="card-image">
                                        <?php    
                                echo "<img src='../admin/img/$row[photo]'> ";
                            ?>
                                    </div>
                                    <div class="card-content d-flex flex-column align-items-center">
                                        <h4 class="pt-2" style="color: #fff;">
                                            <?php 
                                    echo "<a href=carpartsmodel.php?x=$row[0]> $row[1]</a>";
                                ?></h4>
                                        <ul class="social-icons d-flex justify-content-center">

                                    </div>
                                </div>
                            </div>
                            <br>

                            <?php
                    include('connect.php');
                    $q=mysqli_query($con,"select * from car_parts_master where cpmid=17");
                    $row=mysqli_fetch_array($q)
                ?>
                            <div class="col-lg-3">

                                <div class="card p-0" style="height: 80%;">
                                    <div class="card-image">
                                        <?php    
                                echo "<img src='../admin/img/$row[photo]'> ";
                            ?>
                                    </div>
                                    <div class="card-content d-flex flex-column align-items-center">
                                        <h4 class="pt-2" style="color: #fff;">
                                            <?php 
                                    echo "<a href=carpartsmodel.php?x=$row[0]> $row[1]</a>";
                                ?></h4>
                                        <ul class="social-icons d-flex justify-content-center">

                                    </div>
                                </div>
                            </div>
                            <a href='carparts.php'><button class="btn btn-primary wow fadeInUp"
                                    style="margin-left: 514px;" role="button"><strong> View
                                        Parts</strong></button></a>

                        </div>
                    </div>

                    <br>

                </div>
    </div>
    <br>
    <br>

    <!--====================================================
                      Parts end
======================================================-->
    <!--====================================================
                      Accessires Start
======================================================-->
    <h3 class="title-w3 title-w3-3 mb-sm-5 mb-4 text-dark font-weight-bold wow fadeInUp" align=left id="font">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Car
        Accessories </h3>
    <hr style="
    margin-top: -66px;
    background: #007bff;
    margin-left: 357px;
    margin-right: 1055px;
    border-width: 3px;
">
    <br>
    <br>
    <div id="acc">
        <div class="container" style="padding-top: 50px;">
            <div class="row">
                <?php
            include('connect.php');
            $q=mysqli_query($con,"select * from car_accessories_master");
            while($row=mysqli_fetch_array($q))
            {   
        ?>
                <div class="col-lg-3">

                    <div class="card p-0" style="height: 255px;">
                        <div class="card-image">
                            <?php    
                echo "<img src='../admin/img/$row[photo]'> ";
                ?>
                        </div>
                        <div class="card-content d-flex flex-column align-items-center">
                            <h4 class="pt-2" style="color: #fff;">
                                <?php 
                        echo "<a href=caraccmodel.php?x=$row[0]> $row[1]</a>";
                        ?></h4>
                            <ul class="social-icons d-flex justify-content-center">

                        </div>
                    </div>
                </div>

                <?php
            }
            ?>
            </div>
        </div>
        <br><br>
        <a href='caracc.php'><button class="btn btn-primary wow fadeInUp" style="margin-left: 692px;"
                role="button"><strong> View
                    Accessories</button></a>
        <br>
        <br>
    </div>

    <br><br>
    <!--====================================================
        Accessires end 
    ======================================================-->



    <!--====================================================
        About Us end 
    ======================================================-->

    <section id="home">
        <?php 
                 include('connect.php');
                 $q=mysqli_query($con,"select * from about_us");
                 $row=mysqli_fetch_array($q)
            ?>
        <div class="row" style="margin-top: 20px;">

            <div class="col-lg-6 text-center text-lg-start">
                <h2 style="margin-top: 100px;" id="font"><strong> Know More About Total Car Care </strong>
                    <hr style="margin-left: 252px;margin-right: 227px;border-width: 4px;background: #007bff;">
                </h2>

                <p style="font-size:22px; margin-left: 80px; margin-right: 80px; margin-top: 40px;">
                    Find the best
                    service packages for your car. Select from a wide range of car
                    repairs & services, from
                    general service, car wash, accidental repair to custom repairs, painting and much more.</p>
                <a href='aboutus.php'><button class="btn btn-primary wow fadeInUp" role="button">Know More
                    </button></a>
            </div>
            <div class="col-lg-6 text-center text-lg-start">
                <!-- <video autoplay muted loop id="myVideo">
                        <source src="../latest/img/home1.mp4" type="video/mp4">
                    </video> -->
                <?php echo "<img src='../latest/img/k4.png'>";?>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>

    <!--====================================================
        About Us end 
    ======================================================-->



    <!--====================================================
       Testimonials Start
    ======================================================-->
    <h3 id="font" class="title-w3 title-w3-3 mb-sm-5 mb-4 text-dark font-weight-bold wow fadeInUp" align="left"
        style="visibility: visible;animation-name: fadeInUp;margin-left: 46px;">
        Valuable
        Testimonials </h3>
    <hr style="
    margin-top: -66px;
    background: #007bff;
    margin-left: 444px;
    margin-right: 942px;
    border-width: 3px;
">
    <br>
    <section id="client" class="client testimonials-p2">
        <div class="container">
            <div class="row">
                <?php 
                    include('connect.php');
                    $q=mysqli_query($con,"select * from testimonials where tid = 10");
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

                <?php 
                    include('connect.php');
                    $q=mysqli_query($con,"select * from testimonials where tid = 8");
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
    </section>
    <a href='testimonials.php'><button class="btn btn-primary wow fadeInUp"
            style="margin-left: 711px; margin-top: -48px;" role="button">View
            More</button></a>
    <br>
    <br>





    <!--====================================================
       Testimonials end 
    ======================================================-->
    <!--====================================================
        Become A vendor Start 
    ======================================================-->

    <section id="home">
        <?php 
                 include('connect.php');
                 $q=mysqli_query($con,"select * from about_us");
                 $row=mysqli_fetch_array($q)
            ?>
        <div class="row" style="margin-top: 20px;">
            <div class="col-lg-6 text-center text-lg-start" style=" height: 417px; width: 626px;">
                <!-- <video autoplay muted loop id="myVideo">
                        <source src="../latest/img/home1.mp4" type="video/mp4">
                    </video> -->
                <?php echo "<img src='../latest/img/td.jpg' style='height: 417px;width: 626px;'>";?>
            </div>
            <div class="col-lg-6 text-center text-lg-start">
                <h2 style="margin-top: 100px;" id="font"><strong> Become A Vendor</strong>
                    <hr style="margin-left: 252px;margin-right: 227px;border-width: 4px;background: #007bff;">
                </h2>

                <p style="font-size:22px; margin-left: 80px; margin-right: 80px; margin-top: 40px;">
                    Find the best
                    car with total car care. Select from a wide range of brand car
                    from total car care
                    with genuine car parts much more.</p>
                <a href='http://localhost/tcc/vendor/'><button class="btn btn-primary wow fadeInUp" role="button">Vendor
                    </button></a>
            </div>

        </div>
    </section>
    <br>
    <br>
    <br>

    <!--====================================================
       Become A vendor End 
    ======================================================-->







    </div>
</body>

</html>














<?php

    include("f1.php");

?>