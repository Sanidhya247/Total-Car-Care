<?php
include('connect.php');
$acccartid=$_GET['x'];
$q=mysqli_query($con,"update acccart set qty=qty+1 where acccartid=$acccartid");
if($q)
    header('location:cart.php');
else
    echo "not";

?>