<?php
        include('connect.php');
      
?>

<?php
 
$con = mysqli_connect("localhost", "root", "", "tcc");
//error_reporting(0);
session_start();
if(isset($_POST['verify_email']))
{
// $otp = $_POST["otp"];
$email=$_SESSION['email'];
//echo $email;
$q=mysqli_query($con,"select * from user_registration where email='$email'");

$row=mysqli_fetch_array($q);
$otp=$row['otp'];
$otp1 = $_POST["otp"];
if($otp==$otp1)
{
     $q=mysqli_query($con,"update user_registration set status=1 where email='$email' and otp ='$otp' ");
     
       if ($q)
       {
           // echo "Verification code is valid";
        //    header("location:login.php");
            echo "<script> window.location.assign('login.php');</script>";
       }
       else
       {
           echo "Verification code is not valid";
       }
   }
}

?>


<form method="POST">

    <input type="text" name="otp" placeholder="Enter verification code" required />

    <input type="submit" name="verify_email" value="Verify Email">
</form>