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
                            <th class="center">
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </th>

                            <th>Vendor Id</th>
                            <th>Vendor Name</th>
                            <th>Phone No</th>
                            <th>Email</th>
                            <th>City</th>
                            <th>Photo</th>
                            <th>Status</th>
                            <th>Confirm</th>
                            <th>Reject</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php
								include('connect.php');
								$q=mysqli_query($con,"select * from vendor_master ");
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

                            <td><?php echo $row['vid']; ?></td>
                            <td><?php echo $row['vname']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['city']; ?></td>
                            <td><?php echo "<image src='img/$row[photo]' height=100 width=100>"; ?></td>
                            <td><?php echo $row['status']; ?></td>

                            <!-- <td><button type="submit" name="Confirm" class=" btn btn-sm btn-primary"><a href="confirm.php"></a>Confirm</button></td>	
													
													<td><button type="submit" name="Reject" class=" btn btn-sm btn-primary">Reject</button></td> -->
                            <!-- <td><a href confirm.php> Confirm</a></td> -->
                            <?php
												echo "	<td><a href=confirm.php?x=$row[0]&y=$row[3]>Confirm</a>  </td>  ";
												?>

                            <?php
												echo "	<td><a href=reject.php?x=$row[0]>Reject</a>  </td>  ";
												?>
                            <!-- <td><a onclick="del(<?php echo $row[0]; ?>)"><image src=img/Delete.png height=30 width=30></a></td> -->

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