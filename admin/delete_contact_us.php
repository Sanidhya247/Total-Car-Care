<?php
$cuid=$_GET["cuid"];
include('connect.php');
$q=mysqli_query($con,"delete from contact_us where cuid=$cuid");
if($q)
{
    echo "<script>alert('Deleted..');</script>";
    header("location:contact_us.php");
}
else
{
    echo "<script>arlert('Not Deleted...Plz try again.....');</script>";
}
?>