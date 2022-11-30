<?php
    include("hhh.php");
?>

<!DOCTYPE html>

<body>


    <?php
    include('connect.php');
    error_reporting(1);
    if(isset($_POST['delete']))
    {
        $q3=mysqli_query($con,"delete from booking ");
        if($q3)
        {
            echo "<script>alert('Delete......');</script>";
            header("location:manage_booking.php");
        }
        else
        {
            echo "<script>alert('Not Delete......');</script>";
        }
    }

?>

    <form method="POST" action="" enctype="multipart/form-data">

        <br>
        <div class="row">
            <div class="col-xs-12">
                <table id="simple-table" class="table  table-bordered table-hover">


                    <thead>
                        <tr>
                            <br>

                            <th>Brand Id</th>
                            <th>Car Brand Name</th>
                            <th>Car Model Name</th>
                            <th>Car HSRP Number</th>
                            <th>Car Model Year</th>
                            <th>Fuel Type</th>
                            <th>Type Of Service</th>
                            <th>Customer Name</th>
                            <th>Email</th>
                            <th>Phone No</th>
                            <th>Zipcode</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Confirm</th>
                            <th>Reject</th>

                        </tr>
                    </thead>


                    <tbody>
                        <?php
								include('connect.php');
								$q=mysqli_query($con,"select * from booking");
								while($row=mysqli_fetch_array($q))
								{
								?>

                        <!-- <?php
    include('connect.php');

    if (isset($_POST['confirm'])) 
    {
        $bid=$_POST['bid'];
        $to = $row['email'];
        $subject = "Test mail";
        $message = "you are confirmed.";
        $from = "totalcarcare5@gmail.com";
        $headers = "From : $from";

        $q = mysqli_query($con, "update booking set status=1 where bid=$bid ");
        if (mail($to, $subject, $message, $headers) && ($q))
    {
        echo "<script>window.location.assign('manage_booking.php')</script>";
        echo "<script>alert('update successfully......');</script>";
    } 
    else 
    {
        echo "<script>alert('not updated...');</script>";
    }
}
?> -->
                        <tr>
                            <td><?php echo $row['bid']; ?></td>
                            <td><?php echo $row['cbname']; ?></td>
                            <td><?php echo $row['cmname']; ?></td>
                            <td><?php echo $row['cnumber']; ?></td>
                            <td><?php echo $row['cmyear']; ?></td>
                            <td><?php echo $row['ftype']; ?></td>
                            <td><?php echo $row['service']; ?></td>
                            <td><?php echo $row['cname']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['zipcode']; ?></td>
                            <td><?php echo $row['service_date']; ?></td>
                            <td><?php echo $row['service_time']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row['status']; ?></td>


                            <!-- <td><a href confirm.php> Confirm</a></td> -->
                            <!-- <td><input type="submit" name="confirm" id="confirm" value="Confirm"
                                    class="btn btn-warning mr-2"></td>
                            <td> <input type="submit" name="reject" id="reject" value="Reject"
                                    class="btn btn-warning mr-2"></td> -->
                            <?php
								echo "	<td><a href=bookingconfirm.php?x=$row[0]&y=$row[8]>Confirm</a></td>";
							?>

                            <?php
								echo "	<td><a href=bookingreject.php?x=$row[0]&y=$row[8]>Reject</a>  </td>  ";
							?>

                        </tr>
                        <?php
							}
						?>
                    </tbody>
                </table>
            </div>
            <div style="margin-left: 520px;">
                <input type="submit" name="delete" id="delete" value="Delete All History" class="btn btn-danger mr-2">

            </div>

    </form>

</body>

</html>

<?php
    include("fff.php");
?>