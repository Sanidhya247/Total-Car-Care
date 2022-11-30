<?php
$cadid=$_GET["cadid"];
include('connect.php');
$q=mysqli_query($con,"delete from car_accessories_details where cadid=$cadid");
if($q)
{
    echo "<script>alert('Deleted..');</script>";
    header("location:car_accessories_details.php");
}
else
{
    echo "<script>arlert('Not Deleted...Plz try again.....');</script>";
}
?>