<?php 
session_start();
include('connect.php');
if(isset($_SESSION['uid']))
{
    $cadid=$_GET['cam'];
    $uid=$_SESSION['uid'];
    $tdate=date('y/m/d');
    $q=mysqli_query($con,"insert into acccart values ('',$uid,$cadid,'$tdate',1,0)");
    if($q)
    {
        echo "<script>alert('Your Item has been added into the cart..');</script>";
        header('location:index.php');
    }
     }
else
{
    header('location:login-form-20/login.php');
}
?>