<?php
$car_id=$_GET["car_id"];
include('connect.php');
$q=mysqli_query($con,"delete from car_master where car_id=$car_id");
if($q)
{
    echo "<script>alert('Deleted..');</script>";
    header("location:car_master.php");
}
else
{
    echo "<script>arlert('Not Deleted...Plz try again.....');</script>";
}
?>