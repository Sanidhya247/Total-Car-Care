<html>

<body>


    <?php
    include('connect.php');
    // error_reporting(0);

    $tsid = $_GET['x'];

                $q2=mysqli_query($con,"select * from testdrive where tsid=$tsid ");
                $row2=mysqli_fetch_array($q2);
                $tdate=$row2['testdrive_date'];
                $ttime=$row2['testdrive_time'];
                $to = $_GET['y'];
                $subject = "Conformation Mail";
                $message = "Your Testdrive Booked Successfully !! Your Testdrive Date is $tdate and Time is $ttime" ;                                                                                                              
                $from = "totalcarcare5@gmail.com";
                $headers = "From : $from";

                $q = mysqli_query($con,"update testdrive set status=1 where tsid=$tsid");
                $row=mysqli_fetch_array($q);

                if (mail($to, $subject, $message, $headers) && ($q)) 
                if($q) 
                {
                    
                    //  echo "<script>alert('update successfully......');</script>";
                   echo "<script>window.location.assign('manage_testdrive.php')</script>";
                } else {
                    echo "<script>alert('not updated...');</script>";
                }
                
            
    ?>



</body>

</html>