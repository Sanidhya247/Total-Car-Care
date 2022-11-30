<?php
$id=$_GET['id'];
$con=mysqli_connect("localhost","root","","tcc");
$q=mysqli_query($con,"delete from faqs where id=$id");

if($q){
    header("location:faq.php");
}
    else{
    echo "not delete";
    }
?>