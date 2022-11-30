<?php
include('connect.php');


$cartid=$_GET["y"];





$q2=mysqli_query($con,"delete from pacart where cartid=$cartid");
if($q2)
{
    echo "<script>alert('Deleted..');</script>";
    header("location:cart.php");
}
else
{
    echo "<script>arlert('Not Deleted...Plz try again.....');</script>";
}

?>