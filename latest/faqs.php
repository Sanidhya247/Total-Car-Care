<?php
    include('h1.php');
    // include ("connect.php");
?>
<style>
    /* @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap'); */
*{
    margin: 0;
    padding: 0;
}

/* body{
    font-family: 'Lato', sans-serif;
} */

/* .container{
    width: 60%;
    margin: 0 auto;
    margin-top: 100px;
} */

.container h2{
    position: relative;
    width: 23rem;
    color:black;
    margin: 20px 0;
}

/* .container h2::after{
    position: absolute;
    content: '';
    width: 67px;
    height: 2px;
    right: 5px;
    background-color: hotpink;
    bottom: 0;
} */

.accordion{
    width: 50%;
    padding: 0 5px;
    border: 2px solid #6db5ff;
    cursor: pointer;
    display: flex;
    margin: 10px 0;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
    border-radius: 30px;
    
}

.accordion i {
    color: #6db5ff;
    transition: all .5s ease-in;
}
.accordion .fa-minus{
    display: none;
}
.active, .accordion:hover{
    background-color: #6db5ff;
    color: white;
    transition: all .5s ease-in;
    border: 2px solid #dddddd;
    
}
.active .fa-minus{
    display: block;
}
.active .fa-plus{
    display: none;
}
.accordion h5{
    font-size: 20px;
    margin: 0;
    color: #001733;
    padding-left: 5px;
    
}
.active i, .active h5 , .accordion:hover i , .accordion:hover h5{
    color: white;
}
.panal{
    padding: 0 15px;
    border-left: 1px solid #6db5ff;
    margin-left: 25px;
    font-size: 14px;
    text-align: justify;
    overflow: hidden;
    transition: all .5s ease-in;
    max-height: 0;
    width: 40%;

}
#font{
    font-family: 'Aldrich';font-size: 29px;
}
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"/>
<link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet'>
<div class="container" align="center" >
<div id="home-p" class="home-p pages-head1 text-center" style="
    margin-right: -69px;
    width: 1520px;
    margin-left: -205px;
">
      <div class="container">
        <h1 class="wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">FAQ-s</h1>
        
      </div><!--/end container-->
    </div>
      

<br>
        <b><h1 class="wow fadeInUp" data-wow-delay="0.1s" style="font-size:xx-large" id="font">Frequently Asked Questions - FAQs </h1></b><hr style="margin-left: 252px;margin-right: 227px;border-width: 4px;background:#6db5ff;">
        <br>
        <?php
            include('connect.php');
            $q=mysqli_query($con,"select * from faqs");
            while($row=mysqli_fetch_array($q))
            {
        ?>
            
            <div id="font" class="accordion" >
                <h5><?php echo "$row[1]";?></h5>
                <i class="fas fa-minus"style="margin-right: 6px;"></i>
                <i class="fas fa-plus" style="margin-right: 6px;"></i>
            </div>
                <div class="panal">
                <p> <?php echo "$row[2]";?></p>
                </div>
            
        <?php
            }
        ?>
</div>
        
<br><br><br>
    <?php
    include('f1.php');
    // include ("connect.php");
    ?>
    
<script>
    var acordion = document.getElementsByClassName('accordion');

    var i;
    var len = acordion.length;
    for(i = 0; i<len; i++){
        acordion[i].addEventListener('click', function(){
            this.classList.toggle('active');
            var panal = this.nextElementSibling;
            if(panal.style.maxHeight){
                panal.style.maxHeight = null;
            }else{
                panal.style.maxHeight = panal.scrollHeight + 'px';
            }
        })
    }
</script>
<script>
var i = 0;
var txt = 'Lorem ipsum dummy text blabla.';
var speed = 50;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("demo").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
</script>