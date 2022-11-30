<?php
$cpmid=$_GET["cpmid"];
include('connect.php');
$q=mysqli_query($con,"delete from car_parts_master where cpmid=$cpmid");
if($q)
{
    echo "<script>alert('Deleted..');</script>";
    header("location:car_parts_master.php");
}
else
{
    echo "<script>arlert('Not Deleted...Plz try again.....');</script>";
}
?>



