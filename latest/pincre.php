<?php
include('connect.php');
$cartid=$_GET['x'];
$q=mysqli_query($con,"update pacart set qty=qty+1 where cartid=$cartid");
if($q)
    header('location:cart.php');
else
    echo "not";

?>