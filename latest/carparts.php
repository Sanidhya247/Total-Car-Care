<?php
    include('h1.php');
?>
<style>
/* @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap'); */

/* * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif
} */

body {
    min-height: 100vh;
    /* background: linear-gradient(to bottom, #000428, #004683) */
}

/* .container {
    margin-top: 100px
} */

.container .row .col-lg-4 {
    display: flex;
    justify-content: center
}

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

/* .card .card-content .social-icons li a {
    color: #fff
} */

/* .card .card-content .social-icons li a span {
    font-size: 1.3rem
} */

/* @media(max-width: 991.5px) {
    .container {
        margin-top: 20px
    }

    .container .row .col-lg-4 {
        margin: 20px 0px
    }
} */
</style>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <!-- <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
    </ol>
    <div class="carousel-inner" style="height:450px;">
        <div class="carousel-item active">
            <img class="d-block w-100" src="../latest/img/p.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="../latest/img/allp2.png" alt="Second slide">
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
<br>
<div class="container" style="padding-top: 50px;">
    <div class="row">
        <?php
            include('connect.php');
            $q=mysqli_query($con,"select * from car_parts_master");
            while($row=mysqli_fetch_array($q))
            {   
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
            }
            ?>
    </div>
</div>
<br>
<br>
<br>
<?php
    include('f1.php');
?>