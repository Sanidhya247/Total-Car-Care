<?php
session_start();

$acc_total=$_SESSION['acc_total'];
$pa_total=$_SESSION['pa_total'];
 $qua=$_SESSION['pa_qty'];
 $qua2=$_SESSION['acc_qty'];
 $cpdid=$_SESSION['cpdid'];
 $cadid=$_SESSION['cadid'];
$q4=mysqli_query($con,"update car_accessories_details set qty=qty-$qua2 where cadid=$cadid");
$q5=mysqli_query($con,"update car_parts_details set qty=qty-$qua where cpdid=$cpdid");
$q7=mysqli_query($con,"delete from acccart where uid=$uid");
$q7=mysqli_query($con,"delete from pacart where uid=$uid");
header('location:order/orderconfirm.php');
?>