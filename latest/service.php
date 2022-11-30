<?php
    include('h1.php');
?>
<div id="home-p" class="home-p pages-head2 text-center">
      <div class="container">
        <h1 class="wow fadeInUp" data-wow-delay="0.1s">Our Services</h1>
        <p></p>
      </div><!--/end container-->
    </div>
<section id="news-p1" class="news-p1">
    <div class="container-fluid">
        <div class="row" style="margin-bottom:50px;">
            <?php
                include('connect.php');
                // $brand_id=$_GET['x'];
                $q=mysqli_query($con,"select * from service_master");
                while($row=mysqli_fetch_array($q))
                {   
            ?>

            <!-- <div class="card-columns"> -->

            <div class="col-md-4">
                <div class="card"
                    style="width: 360px; height: 225px; margin-left:64px; margin-top:50px; margin-bottom:50px;">
                    <div class="desc-comp-offer-cont">
                        <div class="thumbnail-blogs">
                            <div class="caption">
                                <i class="fa fa-chain"></i>
                            </div>
                            <?php
                                echo  "<img src='../admin/img/$row[photo]' class='img-fluid' style='width: 360px; height: 225px;px;'>";
                            ?>
                        </div>
                        <!-- <h3><?php echo "<a href='carinfo.php?x=$row[0]'>$row[2]</a>";?></h3> -->
                        <h3><?php echo "<a href='servicemodel.php?x=$row[0]'>$row[1]</a>";?></h3>
                        <!-- <p class="desc">The idea is to incorporate easy steering mechanism and brakes to make
                            turning
                            hand carts easy and arrest slide on inclines. </p> -->
                        <!-- <a href="#"><i class="fa fa-arrow-circle-o-right"></i> Learn More</a> -->
                    </div>
                </div>
            </div>
            <!-- </div> -->
            <?php }?>
        </div>
    </div>
    </div>
</section>
<?php
    include('f1.php');
?>