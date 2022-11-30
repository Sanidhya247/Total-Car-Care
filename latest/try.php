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

.grid-container {
    display: grid;
    grid-template-columns: auto auto auto auto;
}
</style>

<div class="grid-container ">
    <div class="container" style="margin-top: 60px; ">
        <!-- <div class="row"> -->
        <br>
        <div class="card" id="tcc" style=" margin-bottom: 80px ; margin-left: 80px; height:360px">
            <div class="card-img" style="background-color: #A4E0DC;">
                <img src="../vendor/img/bmw1.jpg">
            </div>
            <div class="card-content">
                <a>
                    <h2 class="big-title">BMW</h2>
                </a>
            </div>
        </div>
        <br>
        <!-- </div> -->
    </div>
    <div class="container" style="margin-top: 60px; ">
        <!-- <div class="row"> -->
        <br>
        <div class="card" id="tcc" style=" margin-bottom: 80px ; margin-left: 80px; height:360px">
            <div class="card-img" style="background-color: #A4E0DC;">
                <img src="../vendor/img/bmw1.jpg">
            </div>
            <div class="card-content">
                <a>
                    <h2 class="big-title">BMW</h2>
                </a>
            </div>
        </div>
        <br>
        <!-- </div> -->
    </div>
    <div class="container" style="margin-top: 60px; ">
        <!-- <div class="row"> -->
        <br>
        <div class="card" id="tcc" style=" margin-bottom: 80px ; margin-left: 80px; height:360px">
            <div class="card-img" style="background-color: #A4E0DC;">
                <img src="../vendor/img/bmw1.jpg">
            </div>
            <div class="card-content">
                <a>
                    <h2 class="big-title">BMW</h2>
                </a>
            </div>
        </div>
        <br>
        <!-- </div> -->
    </div>
    <div class="container" style="margin-top: 60px; ">
        <!-- <div class="row"> -->
        <br>
        <div class="card" id="tcc" style=" margin-bottom: 80px ; margin-left: 80px; height:360px">
            <div class="card-img" style="background-color: #A4E0DC;">
                <img src="../vendor/img/bmw1.jpg">
            </div>
            <div class="card-content">
                <a>
                    <h2 class="big-title">BMW</h2>
                </a>
            </div>
        </div>
        <br>
        <!-- </div> -->
    </div>
</div>

<!-- <?php
    // include('f1.php');
?> -->