<?php
    include("hhh.php");
?>

<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="home.php">Home</a>
							</li>

							<li>
								<a href="#">manage_parts</a>
							</li>
							<li class="active">car_parts_master</li>
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
							<h1>
								Manage_parts
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									car_parts_master
								</small>
							</h1>
						</div><!-- /.page-header -->
</head>

    <body class="no skin">
    <?php
        
        $con=mysqli_connect("localhost","root","","tcc");

        if(isset($_POST['submit']))
        {
            $cpname=$_POST['cpname'];
            //$photo=$_POST['photo'];

			$file_name=$_FILES["photo"]["name"];
			$file_temp=$_FILES["photo"]["tmp_name"];
		
			$photo=$_FILES["photo"]["name"];
   			$dst="./img/".$photo;

           $q=mysqli_query($con,"insert into car_parts_master values('','$cpname','$file_name')");

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
								<form method="POST" action="" enctype="multipart/form-data" class="form-horizontal" role="form" >
									
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Cpname</label>

										<div class="col-sm-9">
											<input type="text" name="cpname" id="cpname" placeholder="parts_name" class="col-xs-10 col-sm-5" required/>
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
												
													<th>Car parts Id</th>
													<th>Car parts Name</th>
													<th>Photo</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>

								<?php
								include('connect.php');
								$q=mysqli_query($con,"select * from car_parts_master");
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

													<td><?php echo $row['cpmid']; ?></td>
													<td><?php echo $row['cpname']; ?></td>
													<td><?php echo "<image src='img/$row[2]' height=100 width=100>"; ?></td>
												
													<td>
														<div class="hidden-sm hidden-xs btn-group">
														
														<a onclick="edit(<?php echo $row[0];?>)"><image src=img/Edit.png height=30 width=30></a>    
														<a onclick="del(<?php echo $row[0]; ?>)"><image src=img/Delete.png height=30 width=30></a>

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
		function del(cpmid)
		{
			if(confirm("Are you sure want to Delete ?"))
			{
				window.location.href='delete_car_parts_master.php?cpmid=' +cpmid+ '';
				return true;
			}
		}
		function edit(cpmid)
		{
			if(confirm("Are you sure want to Edit ?"))
			{
				window.location.href='edit_car_parts_master.php?cpmid=' +cpmid+ '';
				//return true;
			}
		}
	</script>		

<?php
    include("fff.php");
?>