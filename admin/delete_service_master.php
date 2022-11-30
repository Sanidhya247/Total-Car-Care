<?php
$sid=$_GET["sid"];
include('connect.php');
$q=mysqli_query($con,"delete from service_master where sid=$sid");
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



