<?php
    include('h1.php');
?>

<section id="news-p1" class="news-p1">
    <div class="container-fluid">
        <div class="row" style="margin-bottom:50px;">
            <?php
                include('connect.php');
                $brand_id=$_GET['x'];
                $q=mysqli_query($con,"select * from car_master where brand_id=$brand_id");
                while($row=mysqli_fetch_array($q))
                {   
                ?>

            <!-- <div class="card-columns"> -->

            <div class="col-md-6">
                <div class="card"
                    style="width: 600px; height:450px; margin-left:64px; margin-top:50px; margin-bottom:50px;">
                    <div class="desc-comp-offer-cont">
                        <div class="thumbnail-blogs">
                            <div class="caption">
                                <?php 
                                    // $_SESSION['car_name']=$car_name; 
                                    echo "<a href='carinfo.php?x=$row[0]'><i class='fa fa-chain' style='color:white;'></i></a>"; 
                                ?>
                            </div>
                            <?php
                          echo  "<img src='../vendor/img/$row[car_photo]' class='img-fluid' style='width: 600px; height:380px;'>";
                          ?>
                        </div>
                        <h3 align=center><?php echo "<a href='carinfo.php?x=$row[0]'>$row[2]</a>";?></h3>

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