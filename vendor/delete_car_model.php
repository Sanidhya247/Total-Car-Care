<?php
$car_model_id=$_GET["car_model_id"];
include('connect.php');
$q=mysqli_query($con,"delete from car_model where car_model_id=$car_model_id");
if($q)
{
    echo "<script>alert('Deleted..');</script>";
    header("location:car_model.php");
}
else
{
    echo "<script>arlert('Not Deleted...Plz try again.....');</script>";
}
?>