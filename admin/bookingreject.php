<?php
    include('connect.php');
        // $bid=$_GET['x'];
  

        
        $bid = $_GET['x'];
        $to = $_GET['y'];
        $subject = "Rejected Mail";
        $message = "Sorry, Your requested is disable Plese Try again ";
        $from = "totalcarcare5@gmail.com";
        $headers = "From : $from";

        $q = mysqli_query($con,"update booking set status=0 where bid=$bid");
        $row=mysqli_fetch_array($q);

        if (mail($to, $subject, $message, $headers) && ($q)) 
        if($q) 
{
            
            // echo "<script>alert('update successfully......');</script>";
            echo "<script>window.location.assign('manage_booking.php')</script>";
        } else {
            echo "<script>alert('not updated...');</script>";
        }
    
    ?>