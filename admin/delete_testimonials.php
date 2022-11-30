<?php
$tid=$_GET["x"];
include('connect.php');
$q=mysqli_query($con,"delete from testimonials where tid=$tid");
if($q)
{
    echo "<script>alert('Deleted..');</script>";
    header("location:manage_testimonials.php");
}
else
{
    echo "<script>arlert('Not Deleted...Plz try again.....');</script>";
}
?>