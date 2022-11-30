<?php
    include('h1.php');
    // include ("connect.php");
?>
<!--====================================================
                       HOME-P
======================================================-->
<div id="home-p" class="home-p pages-head7 text-center">
    <div class="container">
        <h1 class="wow fadeInUp" data-wow-delay="0.1s">We offer a huge opportunity for growth</h1>
        <p>Discover more about Team</p>
    </div>
    <!--/end container-->
</div>
<br>

<!--====================================================
                      TEAM-P2 
======================================================-->
<section id="comp-offer" class="team-p2">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6  desc-comp-offer">
                <h2>Team Member</h2>
                <div class="heading-border-light"></div>
            </div>
        </div>
        <div class="row">
            <?php
                include('connect.php');
                $q=mysqli_query($con,"select * from meet_our_team");
                while($row=mysqli_fetch_array($q))
                { 
            ?>
            <div class="col-md-4 col-sm-6 ">
                <div class="team-p2-cont wow fadeInUp" data-wow-delay="0.2s">
                    <?php echo "<img src='../admin/img/$row[3]' class='img-fluid'>";?>

                    <h5 style="margin-top: 35px;"><?php echo "$row[1]";?></h5>
                    <h6><?php echo "$row[2]";?></h6>
                    <ul class="list-inline social-icon-f top-data">
                        <li><a href="#" target="_empty"><i class="fa top-social fa-facebook"></i></a></li>
                        <li><a href="#" target="_empty"><i class="fa top-social fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>
<?php
    include('f1.php');
    
?>