<?php
    include("hhh.php");
    error_reporting(1);
?>
<html>
<head>
                 <div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="home.php">Home</a>
							</li>

							<li>
								<a href="#">Manage service</a>
							</li>
							<li class="active">Service_detail</li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>

                        <div class="page-header">
							
						</div><!-- /.page-header -->
</head>

    <body>

	<?php
        
        $con=mysqli_connect("localhost","root","","tcc");

        if(isset($_POST['submit']))
        {
            $sid=$_POST['sid'];
			$sdname=$_POST['sdname'];
			$price=$_POST['price'];
			$description=$_POST['description'];
			//$photo=$_POST['photo'];

			$file_name=$_FILES["photo"]["name"];
			$file_temp=$_FILES["photo"]["tmp_name"];
		
		//	$photo=$_FILES["photo"]["name"];
   		//	$dst="./img/".$photo;

           $q=mysqli_query($con,"insert into service_detail values('',$sid,'$sdname','$price','$description','$file_name')");

					//echo "insert into service_detail values('',$sid,$sdname','$price',$description','$photo')"


            if($q)
            {
				move_uploaded_file($file_temp,"img/".$file_name);
                echo "<script>alert('Inserted......');</script>";
            }
            else
            {
            echo "<script>alert('Not Inserted.....plz try again....');</script>";
            }   
		}
	?>
                        <div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<?php
								include('connect.php');
								?>
								<form method="POST" action="" enctype="multipart/form-data" class="form-horizontal" role="form">
									


									<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Select Service </label>

										<div class="col-sm-9">
											<select name="sid" class="col-xs-10 col-sm-5" >
												<?php
													$q=mysqli_query($con,"select * from service_master");
													while($row=mysqli_fetch_array($q))
													{
														echo "<option value = $row[0]> $row[1] </option>";
														    
													}
												?>
											</select>
										</div>
									</div>
                                   
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Service_detail_name </label>

										<div class="col-sm-9">
											<input type="text" name="sdname" id="sdname" placeholder="Service_detail_name" class="col-xs-10 col-sm-5" required/>
										</div>
									</div>

                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Service_price </label>

										<div class="col-sm-9">
											<input type="text" name="price" id="price" placeholder="Service_price" class="col-xs-10 col-sm-5" required/>
										</div>
									</div>

                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Service_description </label>

										<div class="col-sm-9">
											<input type="text" name="description" id="description" placeholder="Service_description" class="col-xs-10 col-sm-5" required/>
										</div>
									</div>

                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Photo </label>

										<div class="col-sm-9">
											<input type="file" name="photo" id="photo" placeholder="photo" class="col-xs-10 col-sm-5" required/>
										</div>
									</div>
                                    <div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<input type="submit" name="submit" id="submit" class="btn btn-info"  >
												<!-- <i class="ace-icon fa fa-check bigger-110"></i> -->
												<!-- Submit -->
											<!-- </button> -->

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Reset
											</button>
										</div>
                                    </div>   
                                </form>   
                            </div>
                        </div>   
    </body>
</html>



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
												
													<th>Service Detail Id</th>
                                                    <th>Service Id</th>
													<th>Service Detail Name</th>
                                                    <th>Price</th>
													<th>Description</th>
													<th>Photo</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>

								<?php
								include('connect.php');
								$q=mysqli_query($con,"select sd.*,sm.* from service_master sm,service_detail sd where sm.sid=sd.sid");
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

													<td><?php echo $row['sdid']; ?></td>
                                                    <td><?php echo $row['sname']; ?></td>
													<td><?php echo $row['sdname']; ?></td>
                                                    <td><?php echo $row['price']; ?></td>
                                                    <td><?php echo $row['description']; ?></td>
                                                    
													<td><?php echo "<image src='img/$row[5]' height=100 width=100>"; ?></td>
												
													<td>
														<div class="hidden-sm hidden-xs btn-group">

														<a onclick="edit(<?php echo $row[0];?>)"><image src=img/Edit.png height=30 width=30></a>    
														<a onclick="del(<?php echo $row[0]; ?>)"><image src=img/Delete.png height=30 width=30></a>
	
													</td>

															
														</div>

													</td>
												</tr>
												<?php
									}
												?>
												</tbody>
												</table>
											</div>


	<script>
		function del(sdid)
		{
			if(confirm("Are you sure want to Delete ?"))
			{
				window.location.href='delete_service_detail.php?sdid=' +sdid+ '';
				return true;
			}
		}
		function edit(sdid)
		{
			if(confirm("Are you sure want to Edit ?"))
			{
				window.location.href='edit_service_detail.php?sdid=' +sdid+ '';
				//return true;
			}
		}
	</script>	

<?php
    include("fff.php");
?>