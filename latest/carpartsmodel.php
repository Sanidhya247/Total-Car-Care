<?php 
    include('h1.php');
?>
<style>
.social-card-header {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: center;
    justify-content: center;
    height: 96px;
}

/* .social-card-header i {
    font-size: 32px;
    color: #FFF;
} */

/* .share:hover {
    text-decoration: none;
    opacity: 0.8;
} */
</style>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
    integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" style="height:450px;">
        <div class="carousel-item active">
            <img class="d-block w-100" src="../latest/img/cp.jpg" alt="First slide">
        </div>
    </div>
</div>
<br>
<div class="container">
    <br>
    <br>

    <div class="row">
        <?php 
            include('connect.php');
            $cpmid=$_GET['x'];
            $q=mysqli_query($con,"select * from car_parts_details where cpmid=$cpmid ");
            while($row=mysqli_fetch_array($q))
                {  
        ?>
        <div class="col-md-4">
            <div class="card mb-4 border-dark">
                <?php
                    echo "<image src='../admin/img/$row[photo]' style='height:270px; width:300px;'>";
                ?>
                <div class="card-body">
                    <h5 class=" card-title"><?php echo "$row[cpdname]";?></h5>

                    <h5 class="card-title"><b>INR</b> <?php echo "$row[price]";?></h5>
                    <p class="description" style="max-width: 350px; min-height:80px; max-height:80px;">
                        <?php echo "$row[description]";?></p>

                    <?php
                    $qty=$row['qty'];
                    
                    if($qty<=0)
                    echo "<a href=# class='btn btn-dark btn-sm'>Out of Stock</a>";
                    else
                        echo "<a href=hidden.php?cpm=$row[0] class='btn btn-dark btn-sm'>ADD TO CART</a>";
                    ?>
                </div>
            </div>
        </div>
        <?php }?>
    </div>

</div>
<?php 
    include('f1.php');
?>