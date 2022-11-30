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
        $q3=mysqli_query($con,"delete from user_contactus ");
        if($q3)
        {
            echo "<script>alert('Delete......');</script>";
            header("location:manage_contactus.php");
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
                            <th>Email</th>
                            <th>subject</th>
                            <th>Message</th>


                        </tr>
                    </thead>
                    <tbody>

                        <?php
								include('connect.php');
								$q=mysqli_query($con,"select * from user_contactus");
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

                            <td><?php echo $row['ucid']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['subject']; ?></td>
                            <td><?php echo $row['message']; ?></td>



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