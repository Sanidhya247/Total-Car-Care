<?php
    include('connect.php');
        // $vid=$_GET['x'];
  
        

        
         $vid = $_GET['x'];
         $to = $_GET['y'];
        $subject = "Reject Mail";
        $message = "Sorry, You can't Testdrive this car , Please Try agin. ";
        $from = "totalcarcare5@gmail.com";
        $headers = "From : $from";

        $q = mysqli_query($con,"update vendor_master set status=0 where vid=$vid");
        $row=mysqli_fetch_array($q);

        if (mail($to, $subject, $message, $headers) && ($q)) 
        if($q) 
{
            echo "hiiii";
            echo "<script>window.location.assign('manage_vendor.php')</script>";
            echo "<script>alert('update successfully......');</script>";
        } else {
            echo "<script>alert('not updated...');</script>";
        }
    
    ?>