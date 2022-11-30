<?php
$brand_id=$_GET["brand_id"];
include('connect.php');
$q=mysqli_query($con,"delete from brand_master where brand_id=$brand_id");
if($q)
{
    echo "<script>alert('Deleted..');</script>";
    header("location:brand_master.php");
}
else
{
    echo "<script>arlert('Not Deleted...Plz try again.....');</script>";
}
?>