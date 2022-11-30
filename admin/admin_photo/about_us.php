<?php
  include ('hhh.php');
  include ('connect.php');
?>
<head>
                 <div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="home.php">Home</a>
							</li>

						<!--	<li>
								<a href="#">About us</a>
							</li> -->
							<li class="active">About us</li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" required/>
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>

                        <div class="page-header">
							
						</div><!-- /.page-header -->
</head>

<?php
if(isset($_POST['submit']))
{
    $title=$_POST['title'];
    $description=$_POST['description'];
    $q=mysqli_query($con,"insert into about_us values('','$title','$description')");
    if($q)
    {
            echo "<script>alert('Inserted');</script>";
    }
    else
    {
        echo "<script>alert('Not Inserted');</script>";
    }


}
?>
<form  class="form-horizontal" role="form" method=post>
  <h1 align=center><b> ABOUT US</b></h1>
    <div class="form-group">
	    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Title </label>
			<div class="col-sm-9">
				<input type="text" name="title" placeholder="Enter Title" class="col-xs-10 col-sm-5" required />
			</div>
	</div>
    <div class="form-group">
	    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Description </label>
			<div class="col-sm-9">
				<input type="text" name="description" placeholder="Enter Description" class="col-xs-10 col-sm-5" required />
			</div>
	</div>
    <div class="clearfix form-actions">
	<div class="col-md-offset-3 col-md-9">
		<button class="btn btn-info" type="submit" name='submit'>
			<i class="ace-icon fa fa-check bigger-110"></i>
				Submit
		</button>

		&nbsp; &nbsp; &nbsp;
		<button class="btn" type="reset">
			<i class="ace-icon fa fa-undo bigger-110"></i>
				Reset
		</button>
			</div>
	    	</div>
</form>
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
												
													<th>No</th>
													<th>Tiltle</th>
													<th>Description</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>

								<?php
								include('connect.php');
								$q=mysqli_query($con,"select * from about_us");
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
                                                    <td><?php echo $row['id']; ?></td>    
													<td><?php echo $row['title']; ?></td>
													<td><?php echo $row['description']; ?></td>
													
												
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
		function del(id)
		{
			if(confirm("Are you sure want to Delete ?"))
			{
				window.location.href='delete_about_us.php?id=' +id+ '';
				return true;
			}
		}
		function edit(id)
		{
			if(confirm("Are you sure want to Edit ?"))
			{
				window.location.href='edit_about_us.php?id=' +id+ '';
				//return true;
			}
		}
	</script>		

<?php
  include ('fff.php');
?>