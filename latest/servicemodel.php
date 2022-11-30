<?php
    include('h1.php');
    include('connect.php');
?>
<style>
/* h2 {
  font-size: 28px;
  font-weight: 700;
  margin-bottom: 5px;
} */

.price {
    margin-bottom: 10px;
}

.wrapper {
    margin: 0 auto;
    width: 860px;
}

.columns {
    margin: 0 auto;
    max-width: 900px;
}

.details {
    position: relative;
    width: 100%;
    height: 100%;
    /* float: left; */
}

.thumbnail-container {
    position: relative;
    width: 100%;
    height: 100%;
    float: left;
}

.price {
    font-size: 20px;
    color: #777474;
}

.wishlist-container {
    padding-left: 0;
}

#header {
    width: 100%;
    text-align: center;
    background: white;
    padding: 5px;
    /*box-shadow: 0 10px 17px 0px #c0c0c0;*/
    box-shadow: 0 5px 10px 0px #dbd7d7;
}

#header img {
    max-width: 10px;
}

.columns {
    margin-top: 30px;
}

.button {
    width: 200px;
    border-radius: 0;
}

.select,
select {
    width: 100%;
    border-radius: 0 !important;
}

#wishlist-container {
    padding-left: 0;
}

#buy-container {
    padding-right: 0;
}

.small-text {
    font-size: 14px;
}

.small-text span {
    font-weight: bold;
}

.buy-button {
    background: #ff6900;
    color: white;
    border: none;
}

.buy-button:hover,
.buy-button:active,
.buy-button:focus {
    color: white;
    opacity: 0.9;
}

a {
    color: #ff6900;
}

a:hover {
    color: #ff6900;
    opacity: 0.8;
}

.buy-button {
    background: #007bff;
    color: white;
    border: none;
}

/* @media only screen and (max-width: 769px) {

  #wishlist-container, #buy-container {
    padding: 0 0 15px 0;
  }
} */
</style>


<!--====================================================
                        SHOP-P1
======================================================-->
<section id="shop-p1" class="shop-p1">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="shop-p1-title">
                    <br>
                    <br>
                    <br>
                    <h3>Service</h3>
                    <div class="heading-border-light"></div>
                </div>
                <div class="list-group">
                    <a href="service.php" class="list-group-item">Service</a>
                    <!-- <a href="caracc.php" class="list-group-item">Car Accessories</a> -->

                </div>

                <br>
                <br>
                <br>

            </div>


            <div class="col-lg-9">



                <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="img/shop/sevice2.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="img/shop/service1.png" alt="Second slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>



                <!-- ppp -->
                <?php 
                    include('connect.php');
                    $sid=$_GET['x'];
                    $q=mysqli_query($con,"select * from service_detail where sid=$sid");
                    while($row=mysqli_fetch_array($q))
                    {  
                ?>

                <div class="row " style="margin-top: 60px; margin-bottom: 60px;">
                    <div class="column" style="height:270px; width:300px;">
                        <div class="thumbnail-container">
                            <!-- <img class="drift-demo-trigger" data-zoom="https://awik.io/demo/webshop-zoom/shoe-large.jpg" src="https://awik.io/demo/webshop-zoom/shoe-small.jpg" style="height: 270px; width: 300px"> -->
                            <?php
                                echo "<image src='../admin/img/$row[photo]' style='height:270px; width:300px;'>";
                            ?>
                            <br>
                        </div>
                    </div>

                    <div class="column" style="margin-left :40px;">
                        <div class="details">
                            <h2 style="max-width: 350px;"><?php echo "$row[sdname]";?></h2>
                            <p class="price"> <b>INR</b> <?php echo "$row[price]";?></p>
                            <p class="description" style="max-width: 350px;"><?php echo "$row[description]";?></p>
                            <div class="columns">
                                <div class="column" id="buy-container">
                                    <button class="button buy-button">
                                        <a href="booking/booking.php" style="color: white;">BOOK YOUR SERVICE</a>
                                    </button>
                                </div>
                            </div>
                            <!-- <p class="small-text"><span>Standard delivery</span> 2-5 working days</p>
      <p class="small-text"><span>Next day delivery</span> order before 2pm ($5.79)</p> -->
                        </div>
                        <hr>
                    </div>
                </div>
                <?php
                  }
                ?>
                <!-- ppp -->

            </div>
        </div>
    </div>
</section>


<!-- <p class="small-text" style=" text-align: center; padding-top: 30px; padding-bottom: 15px;">Zoom plugin: <a href="" target="_blank">Drift</a></p> -->
<script>
new Drift(document.querySelector('.drift-demo-trigger'), {
    paneContainer: document.querySelector('.details'),
    inlinePane: 769,
    inlineOffsetY: -85,
    containInline: true,
    hoverBoundingBox: true
});
</script>
<?php
    include('f1.php');
?>