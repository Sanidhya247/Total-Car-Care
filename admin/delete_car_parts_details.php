<?php
$cpdid=$_GET["cpdid"];
include('connect.php');
$q=mysqli_query($con,"delete from car_parts_details where cpdid=$cpdid");
if($q)
{
    echo "<script>alert('Deleted..');</script>";
    header("location:car_parts_details.php");
}
else
{
    echo "<script>arlert('Not Deleted...Plz try again.....');</script>";
}
?>