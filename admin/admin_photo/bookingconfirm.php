<html>

<body>

    <?php
    include('connect.php');

    if(isset($_POST['submit']))
    {
        //$bid=$_GET['bid'];
        $date=$_POST['date'];
        $time=$_POST['time'];
        
        $bid = $_GET['x'];
        $to = $_GET['y'];
        $subject = "Cnformation Mail";
        $message = "Your Service Booked Successfully Your Date  is " .$date . " And Time is " . $time;                                                                                                                
        $from = "totalcarcare5@gmail.com";
        $headers = "From : $from";

        
        $q=mysqli_query($con,"insert into booking_confirm values('',$bid,'$date','$time')");
              if($q)
                {
                    $q1 = mysqli_query($con,"update booking set status=1 where bid=$bid");
                    mail($to, $subject, $message,$from,$headers);
                    echo "<script>alert('Your service book successfully, Our team send a detail shortly by mail please check your register mail ......');</script>";
                    header('location:manage_booking.php');
                }
                else
                {
                    echo "<script>alert('Not Inserted.....plz try again....');</script>";
                }   
        
        
    
    }
    ?>


    <form method="POST" action="">
        <div>
            <label>
                <span>Booking Date</span>
            </label>
            <input type="date" name="date" id="date">
        </div>

        <div>
            <label>
                <span>Booking time</span>
            </label>
            <input type="time" name="time" id="timr">
        </div>

        <div>
            <input type="submit" name="submit" id="submit" value="SEND">
        </div>

    </form>
</body>

</html>