<?php 
session_start();
include('connect.php');
//echo $_SESSION['uid'];
if(isset($_SESSION['uid']))
{
    $cpdid=$_GET['cpm'];
    $uid=$_SESSION['uid'];
    $tdate=date('y/m/d');
    $q=mysqli_query($con,"insert into pacart values ('',$uid,$cpdid,'$tdate',1,0)");
    echo "insert into pacart values ('',$uid,$cpdid,'$tdate',1,0)";
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