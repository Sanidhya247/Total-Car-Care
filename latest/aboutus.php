<?php
    include('h1.php');
?>
<style>
h2 {
    color: white;
}
</style>
<!--====================================================
                       HOME-P
======================================================-->
<div id="home-p" class="home-p pages-head5 text-center">
    <div class="container">
        <h1 class="wow fadeInUp" data-wow-delay="0.1s">Let's Know About</h1>
        <h2 class="wow fadeInUp" data-wow-delay="0.1s">Total car care</h2>
    </div>
    <!--/end container-->
</div>

<!--====================================================
                        ABOUT-P1
======================================================-->
<br>
<br>
<br>
<section id="about-p1">
    <div class="container">
        <?php
            include('connect.php');
            $q=mysqli_query($con,"select * from about_us");
            while($row=mysqli_fetch_array($q))
            {
        ?>

        <div class="row">
            <div class="col-md-8">
                <div class="about-p1-cont">
                    <h1>
                        <?php 
                            echo "$row[1]";
                        ?> <hr style="border-width: 4px;border-width=5px"></h1>
                        
                    <p>
                        <?php
                                echo "$row[2]";
                            ?>
                    </p>
                    <br><br>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="about-p1-img">
                    <img src="../latest/img/ab.jpg" class="img-fluid wow fadeInUp" data-wow-delay="0.1s" alt="...">
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</section>
<br>
<br>
<img src="../latest/img/k2.png" style="margin-left: 252px;height: 570px; width:1000px">
<!--====================================================
                       NEWS
======================================================-->
<br>
<br>
<br>

<?php
    include('f1.php');
?>