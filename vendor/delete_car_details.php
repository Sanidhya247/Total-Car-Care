<?php
$car_details_id=$_GET["car_details_id"];
include('connect.php');
$q=mysqli_query($con,"delete from car_details where car_details_id=$car_details_id");
if($q)
{
    echo "<script>alert('Deleted..');</script>";
    header("location:car_details.php");
}
else
{
    echo "<script>arlert('Not Deleted...Plz try again.....');</script>";
}
?>