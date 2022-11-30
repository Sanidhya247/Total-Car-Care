<?php
include('connect.php');

$acccartid=$_GET["b"];




$q=mysqli_query($con,"delete from acccart where acccartid=$acccartid");
if($q)
{
    echo "<script>alert('Deleted..');</script>";
    header("location:cart.php");
}
else
{
    echo "<script>arlert('Not Deleted...Plz try again.....');</script>";
}



?>