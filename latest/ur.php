<?php
include('connect.php');
session_start();
// error_reporting(0);
if(isset($_POST['submit']))
{
  $uname=$_POST['uname'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $phone=$_POST['phone'];
  $otp=rand(999,9999);
    // $email_verified_at=$_POST['email_verified_at'];	
	$status = $_POST['status'];
    $to =$_POST['email'];
    $_SESSION['email']=$email;
    $subject = "Test mail";
    $message = "Your verification code is: ' . $otp . ''";
    $from = "totalcarcare5@gmail.com";
    
    $q = mysqli_query($con,"insert into user_registration values('','$uname','$email','$password','$phone','$otp','0')");
    if (mail($to, $subject, $message, $headers) && ($q)) {
        echo "sended...";
        echo "<script>window.location.assign('oo.php')</script>";
    } else {
        echo " not sended...";
    }
/*

    $fields = array(
        "variables_values" => " .$otp . ",
        "route" => "otp",
        "numbers" => " . $contact . ",
    );
    
    $curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_SSL_VERIFYHOST => 0,
      CURLOPT_SSL_VERIFYPEER => 0,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => json_encode($fields),
      CURLOPT_HTTPHEADER => array(
        "authorization:ugBxi3NOI4CyGvKUYmsDethjHW71MRclQFZ86brpLJVXza2qfkhEkGduwnDsA3oL7H1z6XYTJRyWimO9",
        "accept: /",
        "cache-control: no-cache",
        "content-type: application/json"
      ),
    ));
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
    
    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      echo $response;
    }*/
}
?>



<form method="POST">
    <input type="text" name="uname" placeholder="Enter name" required />
    <input type="email" name="email" placeholder="Enter email" required />
    <input type="password" name="password" placeholder="Enter password" required />
    <input type="text" name="phone" placeholder="phone" required />


    <input type="submit" name="submit" value="Register">
</form>