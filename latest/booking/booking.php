<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/etc/bforms/colorlib-booking-19/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2022 11:13:57 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->


<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">




<head>

    <title>Booking Form </title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>


    <style id="" media="all">
    @font-face {
        font-family: 'Lato';
        font-style: normal;
        font-weight: 400;
        src: url(https://colorlib.com/fonts.gstatic.com/s/lato/v22/S6uyw4BMUTPHjx4wWw.ttf) format('truetype');
    }

    @font-face {
        font-family: 'Lato';
        font-style: normal;
        font-weight: 700;
        src: url(https://colorlib.com/fonts.gstatic.com/s/lato/v22/S6u9w4BMUTPHh6UVSwiPHA.ttf) format('truetype');
    }

    #booking {
        font-family: lato, sans-serif;
        background-image: url(../img/bg.jpg);
        background-size: cover;
        height: 1000px;
        background-position: center;
        color: #191a1e;
    }

    #bg {
        background-image: url(../img/bg.jpg);
    }
    </style>

    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <!-- date  -->
    <link href="https://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="Stylesheet" type="text/css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>


    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
    <meta name="robots" content="noindex, follow">
    <script nonce="9b2fc99a-35ad-4e98-b7e8-5b5702432f3c">
    (function(w, d) {
        ! function(a, e, t, r, z) {
            a.zarazData = a.zarazData || {}, a.zarazData.executed = [], a.zarazData.tracks = [], a.zaraz = {
                deferred: []
            };
            var s = e.getElementsByTagName("title")[0];
            s && (a.zarazData.t = e.getElementsByTagName("title")[0].text), a.zarazData.w = a.screen.width, a
                .zarazData.h = a.screen.height, a.zarazData.j = a.innerHeight, a.zarazData.e = a.innerWidth, a
                .zarazData.l = a.location.href, a.zarazData.r = e.referrer, a.zarazData.k = a.screen.colorDepth, a
                .zarazData.n = e.characterSet, a.zarazData.o = (new Date).getTimezoneOffset(), a.dataLayer = a
                .dataLayer || [], a.zaraz.track = (e, t) => {
                    for (key in a.zarazData.tracks.push(e), t) a.zarazData["z_" + key] = t[key]
                }, a.zaraz._preSet = [], a.zaraz.set = (e, t, r) => {
                    a.zarazData["z_" + e] = t, a.zaraz._preSet.push([e, t, r])
                }, a.dataLayer.push({
                    "zaraz.start": (new Date).getTime()
                }), a.addEventListener("DOMContentLoaded", (() => {
                    var t = e.getElementsByTagName(r)[0],
                        z = e.createElement(r);
                    z.defer = !0, z.src = "../../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(
                        JSON.stringify(a.zarazData))), t.parentNode.insertBefore(z, t)
                }))
        }(w, d, 0, "script");
    })(window, document);
    </script>

    <style>
    h2 {
        margin-top: -25px;
        color: #98c9ee;
    }
    </style>
</head>

<body>

    <?php
                $con=mysqli_connect("localhost","root","","tcc");
                if(isset($_POST['submit']))
                {
                    $cbname=$_POST['cbname'];
                    $cmname=$_POST['cmname'];
                    $cnumber=$_POST['cnumber'];
                    $cmyear=$_POST['cmyear'];
                    $ftype = $_POST["fuel"];
       /*  checkbox service */     //$caname=$_POST['caname'];
       $service=implode(", ", $_POST['s1']);
                    $cname=$_POST['cname'];
                    $email=$_POST['email'];
                    $phone=$_POST['phone'];
                    $zipcode=$_POST['zipcode'];
                    $date=$_POST['service_date'];
                    $time=$_POST['service_time'];
                    $address=$_POST['address'];
                    $today=date('y/m/d');
                  //  if($date>$today)
                   // {
              
                  $q=mysqli_query($con,"insert into booking values('','$cbname','$cmname','$cnumber','$cmyear','$ftype','$service','$cname','$email','$phone','$zipcode','$date','$time','$address',0)");

                    if($q)
                    {
                        echo "<script>alert('Your service book successfully, Our team send a detail shortly by mail please check your register mail ......');</script>";
                    }
                    else
                    {
                        echo "<script>alert('Not Inserted.....plz try again....');</script>";
                    }   
                //}
                }
              ?>
    <div id="bg">
        <div id="booking" class="section">
            <div class="section-center">
                <div class="container" style="margin-top: 4%; margin-bottom:1%">
                    <div class="row" style="margin-top: -10px; margin-bottom:1%">
                        <div class="col-md-4">
                            <div class="booking-cta">
                                <p>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-7 col-md-offset-1">
                            <div class="booking-form">
                                <h2>Book your Service Today</h2>

                                <form method="POST" action="">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="form-label">Car Brand Name</span>
                                                <input class="form-control" type="text" name="cbname" id="cbname"
                                                    placeholder="Car Brand Name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="form-label">Car Model name</span>
                                                <input class="form-control" type="text" name="cmname" id="cmname"
                                                    placeholder="Car Model name" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="form-label">Car HSRP Number</span>
                                                <input class="form-control" type="text" name="cnumber" id="cnumber"
                                                    placeholder="Car HSRP Number" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="form-label">Car Model Year</span>
                                                <input class="form-control" type="text" name="cmyear" id="cmyear"
                                                    placeholder="Car Model Year" required>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="form-checkbox">
                                            <label for="roundtrip">
                                                <input type="radio" id="roundtrip" name="fuel" value="petrol">
                                                <span></span>Petrol
                                            </label>
                                            <label for="one-way">
                                                <input type="radio" id="one-way" name="fuel" value="petrol + cng">
                                                <span></span>Petrol + CNG
                                            </label>
                                            <label for="multi-city">
                                                <input type="radio" id="multi-city" name="fuel" value="diesel">
                                                <span></span>Diesel
                                            </label>
                                        </div>
                                    </div>

                                    <div style="color:#98c9ee ;">
                                        <h3><span>Select Our Services :- </span></h3>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <?php
                                    include('connect.php');
                                    $q=mysqli_query($con,"select * from service_detail");
                                    while($row=mysqli_fetch_array($q))
                                    {
                                ?>
                                        <div class="col-md-6 col-lg-6 ">

                                            <!-- <div style="width:50%;"> -->
                                            <input type="checkbox" id="s1" name="s1[]"
                                                value="<?php echo $row['sdname']; ?>">
                                            <label for="s1"><?php echo $row['sdname'];?></label>
                                            <!-- </div> -->
                                        </div>

                                        <?php
                                        }
                                    ?>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="form-label">Customer Name</span>
                                                <input class="form-control" type="text" name="cname" id="cname"
                                                    placeholder="Customer Name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="form-label">Email</span>
                                                <input class="form-control" type="email" name="email" id="email"
                                                    placeholder="Email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="form-label">Phone Number</span>
                                                <input class="form-control" type="text" name="phone" id="phone"
                                                    placeholder="Phone Number" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="form-label">Zip Code</span>
                                                <input class="form-control" type="text" name="zipcode" id="zipcode"
                                                    placeholder="Zip Code" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="form-label">Address</span>
                                                <!-- <input class="form-control" type="text" name="phone" id="phone"
                                                placeholder="Phone Number"> -->
                                                <textarea class="form-control" name="address" id="address"></textarea>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="form-label">Date</span>
                                                <input class="form-control" type="text" name="service_date"
                                                    id="date_picker" placeholder="Your Date" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="form-label">Time</span>
                                                <input class="form-control" type="time" name="service_time"
                                                    id="service_time" placeholder="Your Time" required>
                                            </div>
                                        </div>
                                    </div>




                                    <input type="submit" name="submit" id="submit" value="BOOKNOW">
                                    <div class="form-btn">
                                        <!-- <button class="submit-btn">BOOK NOW</button> -->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script language="javascript">
    $(document).ready(function() {
        $("#date_picker").datepicker({
            minDate: 0
        });
    });
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
    </script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
        integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
        data-cf-beacon='{"rayId":"6eb457db6d898af9","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from colorlib.com/etc/bforms/colorlib-booking-19/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2022 11:13:58 GMT -->

</html>