<html>

<body>

    <?php
    include('connect.php');
    // error_reporting(0);
                $q2=mysqli_query($con,"select * from booking ");
                $row2=mysqli_fetch_array($q2);
                $date=$row2['service_date'];
                $time=$row2['service_time'];
                $bid = $_GET['x'];
                $to = $_GET['y'];
                $subject = "Conformation Mail";
                $message = "Your Service Booked Successfully !! Your service Date is  " .$date. " and Time is " . $time ;                                                                                                              
                $from = "totalcarcare5@gmail.com";
                $headers = "From : $from";

                $q = mysqli_query($con,"update booking set status=1 where bid=$bid");
                $row=mysqli_fetch_array($q);

                if (mail($to, $subject, $message, $headers) && ($q)) 
                if($q) 
                {
                    
                    //  echo "<script>alert('update successfully......');</script>";
                   echo "<script>window.location.assign('manage_booking.php')</script>";
                } else {
                    echo "<script>alert('not updated...');</script>";
                }
                
            
    ?>



</body>

</html>