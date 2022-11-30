<?php
    include('h1.php');
?>
<style>
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;700&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* body {
    min-height: 100vh;
    font-family: "Quicksand", sans-serif;
    background-color: #8EC5FC;
    background-image: linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);
}

.container {
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    ;
} */

.card {
    width: 90%;
    max-width: 450px;
    background-color: #FFF;
    padding: 0 2rem 1.5rem 2rem;
    border-radius: 10px;
    transition: box-shadow .3s linear;
}

.card:hover {
    box-shadow: 0 0 35px rgba(0, 0, 0, .3);
}

.card .card-img {
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 0 25px rgba(0, 0, 0, .3);
    transform: translateY(-15%);
    transition: box-shadow .3s linear;
}

.card:hover .card-img {
    box-shadow: none;
}

.card .card-img img {
    width: 100%;
    display: block;
}

.card .card-content {
    text-align: center;
}

.card .card-content .big-title {
    color: #333;
    font-size: 1.3rem;
}

.card .card-content .medium-title {
    color: #999;
    font-size: .85rem;
    margin-top: .3rem;
}

#tcc:hover {
    background-color: lightblue;
}
</style>

<div class="container" style="margin-top: 60px; ">
    <div class="row">
        <?php
        include('connect.php');
        $q=mysqli_query($con,"select * from brand_master");
        while($row=mysqli_fetch_array($q))
        {
    ?>
        <br>
        <div class="card" id="tcc" style=" margin-bottom: 80px ; margin-left: 80px; height:360px">

            <div class="card-img" style="background-color: #A4E0DC;">
                <!-- <img
                    src="https://media.istockphoto.com/photos/aerial-panorama-of-botafogo-bay-rio-de-janeiro-picture-id608540602?b=1&k=20&m=608540602&s=170667a&w=0&h=AataLXfn0acAkHnx2CAkKusL4eZl5a7mtOG1LgWdf48="> -->
                <?php
                        echo "<img src='../vendor/img/$row[brand_logo]'>";
                    ?>
            </div>
            <div class="card-content">


                <a href="car.php?x=$row[0]">
                    <h2 class="big-title">
                        <?php
                            //  $_SESSION['brand_name']=$brand_name; 
                            echo "<a href='car.php?x=$row[0]'>$row[1]</a>";
                        ?>
                    </h2>
                </a>
                <!-- <h3 class="medium-title"></h3> -->
            </div>
        </div>
        <br>
        <?php } ?>
    </div>
</div>

<?php
    include('f1.php');
?>