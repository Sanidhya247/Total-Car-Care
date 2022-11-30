<?php
$camid=$_GET["camid"];
include('connect.php');
$q=mysqli_query($con,"delete from car_accessories_master where camid=$camid");
if($q)
{
    echo "<script>alert('Deleted..');</script>";
    header("location:service_master.php");
}
else
{
    echo "<script>arlert('Not Deleted...Plz try again.....');</script>";
}
?>



