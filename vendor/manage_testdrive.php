<?php
    include("hhh.php");
?>

<!DOCTYPE html>

<body>




    <form method="POST" action="" enctype="multipart/form-data">
        <div class="row">
            <div class="col-xs-12">
                <table id="simple-table" class="table  table-bordered table-hover">


                    <thead>
                        <tr>


                            <th>Test drive Id</th>
                            <th>MR/MS</th>
                            <th>Customer Name</th>
                            <th>Email</th>
                            <th>Phone No</th>
                            <th>Zipcode</th>
                            <th>Brand</th>
                            <th>Car</th>
                            <!-- <th>lic Front</th>
                            <th>lic Rear</th> -->
                            <th>Date</th>
                            <th>Time</th>
                            <th>Status</th>
                            <th>Confirm</th>
                            <!-- <th>Reject</th> -->

                        </tr>
                    </thead>


                    <tbody>
                        <?php
								include('connect.php');
								$q=mysqli_query($con,"select * from testdrive");
								while($row=mysqli_fetch_array($q))
								{
								?>

                        <!-- <?php
    include('connect.php');

    if (isset($_POST['confirm'])) 
    {
        $tsid=$_POST['tsid'];
        $to = $row['email'];
        $subject = "Conformation Mail";
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
                            <td><?php echo $row['tsid']; ?></td>
                            <td><?php echo $row['radio']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['zipcode']; ?></td>
                            <td><?php echo $row['brand_name']; ?></td>
                            <td><?php echo $row['car_name']; ?></td>
                            <!-- <td><?php echo "<image src='img/$row[8]' height=100 width=100>"; ?></td>
                            <td><?php echo "<image src='img/$row[9]' height=100 width=100>"; ?></td> -->
                            <td><?php echo $row['testdrive_date']; ?></td>
                            <td><?php echo $row['testdrive_time']; ?></td>

                            <td><?php echo $row['status']; ?></td>



                            <?php
								echo "	<td><a href=testdriveconfirm.php?x=$row[tsid]&y=$row[email]>Confirm</a></td>";
							?>

                            <!-- <?php
								echo "	<td><a href=testdrivereject.php?x=$row[0]&y=$row[3]>Reject</a>  </td>  ";
							?> -->

                        </tr>
                        <?php
							}
						?>
                    </tbody>
                </table>
            </div>
    </form>



</body>

</html>

<?php
    include("fff.php");
?>