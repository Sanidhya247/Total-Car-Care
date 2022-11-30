<?php
    include("hhh.php");
?>

<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="home.php">Home</a>
							</li>

							<li class="active">Contact Us</li>
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
								Other pages
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Contact Us
								</small>
							</h1>
						</div><!-- /.page-header -->
</head>

    <body class="no skin">
    <?php
        
        $con=mysqli_connect("localhost","root","","tcc");

        if(isset($_POST['submit']))
        {
            $name=$_POST['name'];
            $email=$_POST['email'];
            $address=$_POST['address'];
            $mobileno=$_POST['mobileno'];
           
           $q=mysqli_query($con,"insert into contact_us values('','$name','$email','$address','$mobileno')");

            if($q)
            {
				//move_uploaded_file($file_temp,"img/".$file_name);
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
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Name</label>

										<div class="col-sm-9">
											<input type="text" name="name" id="name" placeholder="name" class="col-xs-10 col-sm-5" required/>
										</div>
									</div>

                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Email</label>

										<div class="col-sm-9">
											<input type="email" name="email" id="email" placeholder="enter email here" class="col-xs-10 col-sm-5" required/>
										</div>
									</div>
                                    
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Address</label>
										<div class="col-sm-9">
											<input type="text" name="address" id="address" placeholder="enter address here" class="col-xs-10 col-sm-5" required/>
										</div>
									</div>

                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Mobile No</label>
										<div class="col-sm-9">
											<input type="text" name="mobileno" id="mobileno" placeholder="enter mobile no here" class="col-xs-10 col-sm-5" required/>
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
												
													<th>Id</th>
													<th> Name</th>
													<th>Email</th>
													<th>Address</th>
                                                    <th>Mobile No</th>
                                                    <th>Action</th>
												</tr>
											</thead>
											<tbody>

								<?php
								include('connect.php');
								$q=mysqli_query($con,"select * from contact_us");
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

													<td><?php echo $row['cuid']; ?></td>
													<td><?php echo $row['name']; ?></td>
													<td><?php echo $row['email']; ?></td>
                                                    <td><?php echo $row['address']; ?></td>
                                                    <td><?php echo $row['mobileno']; ?></td>
												
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
		function del(cuid)
		{
			if(confirm("Are you sure want to Delete ?"))
			{
				window.location.href='delete_contact_us.php?cuid=' +cuid+ '';
				return true;
			}
		}
		function edit(cuid)
		{
			if(confirm("Are you sure want to Edit ?"))
			{
				window.location.href='edit_contact_us.php?cuid=' +cuid+ '';
				//return true;
			}
		}
	</script>		

<?php
    include("fff.php");
?>