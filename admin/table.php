<?php
    include("hhh.php");
?>
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
												
													<th>Service Id</th>
													<th>Service Name</th>
													<th>Photo</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>

<?php
include('connect.php');
$q=mysqli_query($con,"select * from service_master");
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

													<td><?php echo $row['sid']; ?></td>
													<td><?php echo $row['sname']; ?></td>
													<td><?php echo "<image src='img/$row[2]' height=100 width=100>"; ?></td>
												
													<td>
														<div class="hidden-sm hidden-xs btn-group">
															

															<button class="btn btn-xs btn-info">
																<i class="ace-icon fa fa-pencil bigger-120"></i>
															</button>
															<?php echo "<a href=delete_service_master.php?sid=$row[0]>";?>
															<button class="btn btn-xs btn-danger">
																<i class="ace-icon fa fa-trash-o bigger-120">
													
																</i>
															</button>
															</a>
															
														</div>

													</td>
												</tr>
												<?php
}
												?>
												</tbody>
												</table>
											</div>

<?php
    include("fff.php");
?>