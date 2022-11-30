<?php
$sdid=$_GET["sdid"];
include('connect.php');
$q=mysqli_query($con,"delete from service_detail where sdid=$sdid");
if($q)
{
    echo "<script>alert('Deleted..');</script>";
    header("location:service_detail.php");
}
else
{
    echo "<script>arlert('Not Deleted...Plz try again.....');</script>";
}
?>