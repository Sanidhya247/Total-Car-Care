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
        $q3=mysqli_query($con,"delete from order_master ");
        if($q3)
        {
            echo "<script>alert('Delete......');</script>";
            header("location:manage_order.php");
        }
        else
        {
            echo "<script>alert('Not Delete......');</script>";
        }
    }

?>
    <form method="POST" action="" enctype="multipart/form-data">
        <div class="row">
            <div class="col-xs-12">
                <table id="simple-table" class="table  table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="center">
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </th>

                            <th>Sr No</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Zip Code</th>
                            <th>Photo</th>
                            <th>Email</th>
                            <th>Accessaries Subtotal</th>
                            <th>Parts Subtotal</th>
                            <th>Total</th>
                            <th>status</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php
								include('connect.php');
								$q=mysqli_query($con,"select * from order_master");
								while($row=mysqli_fetch_array($q))
								{
								?>
                        <tr>
                            <td class="center">
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </td>

                            <td><?php echo $row['oid']; ?></td>
                            <td><?php echo $row['uname']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row['zipcode']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['acc_total']; ?></td>
                            <td><?php echo $row['pa_total']; ?></td>
                            <td><?php echo $row['total5']; ?></td>
                            <td><?php echo $row['status']; ?></td>



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