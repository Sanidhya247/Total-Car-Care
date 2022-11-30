<?php
    include("hhh.php");
    // error_reporting(1);
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
                <a href="#">Manage Vendor</a>
            </li>
            <li class="active">Car Details</li>
        </ul><!-- /.breadcrumb -->

        <div class="nav-search" id="nav-search">
            <form class="form-search">
                <span class="input-icon">
                    <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input"
                        autocomplete="off" />
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
		$vid=$_SESSION['vid'];
        $con=mysqli_connect("localhost","root","","tcc");

        if(isset($_POST['submit']))
        {
			$vid=$_SESSION['vid'];
            $brand_id=$_POST['brand_id'];
            $car_id=$_POST['car_id'];
            $car_model_id=$_POST['car_model_id'];
			$fuel_type=$_POST['fuel_type'];
			$engine_cc=$_POST['engine_cc'];
			$colour=$_POST['colour'];
			$seat=$_POST['seat'];
			$price=$_POST['price'];
			
           
         
           
		
		
        //    $q=mysqli_query($con,"insert into car_details values('',$brand_id,$car_id,'$car_model_id','$fuel_type','$engine_cc','$colour','$seat','$file_name','$file_name1')");
           $q=mysqli_query($con,"insert into car_details values('',$brand_id,$car_id,'$car_model_id','$fuel_type','$engine_cc','$colour','$seat','$price',$vid)");
        

            if($q)
            {
				
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
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Select brand </label>

                    <div class="col-sm-9">
                        <select name="brand_id" class="col-xs-10 col-sm-5">
                            <?php
													$q=mysqli_query($con,"select * from brand_master");
													while($row=mysqli_fetch_array($q))
													{
														echo "<option value = $row[0]> $row[1] </option>";
														    
													}
												?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Select car </label>

                    <div class="col-sm-9">
                        <select name="car_id" class="col-xs-10 col-sm-5">
                            <?php
													$q=mysqli_query($con,"select * from car_master");
													while($row=mysqli_fetch_array($q))
													{
														echo "<option value = $row[0]> $row[2] </option>";
														    
													}
												?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Select Car Model </label>

                    <div class="col-sm-9">
                        <select name="car_model_id" class="col-xs-10 col-sm-5">
                            <?php
													$q=mysqli_query($con,"select * from car_model");
													while($row=mysqli_fetch_array($q))
													{
														echo "<option value = $row[0]> $row[2] </option>";
														    
													}
												?>
                        </select>
                    </div>
                </div>



                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Fuel Type </label>

                    <div class="col-sm-9">
                        <input type="text" name="fuel_type" id="fuel_type" placeholder="fuel_type"
                            class="col-xs-10 col-sm-5" required />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Engine CC </label>

                    <div class="col-sm-9">
                        <input type="text" name="engine_cc" id="engine_cc" placeholder="engine_cc"
                            class="col-xs-10 col-sm-5" required />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> colour </label>

                    <div class="col-sm-9">
                        <input type="text" name="colour" id="colour" placeholder="colour" class="col-xs-10 col-sm-5"
                            required />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Seat </label>

                    <div class="col-sm-9">
                        <input type="text" name="seat" id="seat" placeholder="seat" class="col-xs-10 col-sm-5"
                            required />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Price </label>

                    <div class="col-sm-9">
                        <input type="text" name="price" id="price" placeholder="price" class="col-xs-10 col-sm-5"
                            required />
                    </div>
                </div>









                <div class="clearfix form-actions">
                    <div class="col-md-offset-3 col-md-9">
                        <input type="submit" name="submit" id="submit" class="btn btn-info">
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


                    <th>Car Deatils Id </th>
                    <th>Brand Name </th>
                    <th>Car Name </th>
                    <th>Car Model Name </th>
                    <th>Fuel Type </th>
                    <th>Engine CC </th>
                    <th>Colour </th>
                    <th>Seat </th>
                    <th>Price </th>

                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
								include('connect.php');
		                        $vid=$_SESSION['vid']; 
								// $q=mysqli_query($con,"select cd.*,cm.* from car_model cm,car_details cd where cm.car_model_id=cd.car_model_id");
								$q=mysqli_query($con,"select b.*,c.*,m.*,d.* from brand_master b,car_master c,car_model m, car_details d where b.brand_id=c.brand_id and c.car_id=m.car_id and m.car_model_id=d.car_model_id and d.vid=$vid");

								while($row=mysqli_fetch_array($q))
								{
								?>
                <tr>

                    <td><?php echo $row['car_details_id']; ?></td>
                    <td><?php echo $row['brand_name']; ?></td>
                    <td><?php echo $row['car_name']; ?></td>
                    <td><?php echo $row['car_model_name']; ?></td>
                    <td><?php echo $row['fuel_type'];?></td>
                    <td><?php echo $row['engine_cc']; ?></td>
                    <td><?php echo $row['colour']; ?></td>
                    <td><?php echo $row['seat']; ?></td>
                    <td><?php echo $row['price']; ?></td>




                    <td>
                        <div class="hidden-sm hidden-xs btn-group">

                            <a onclick="edit(<?php echo $row['car_details_id'];?>)">
                                <image src=img/Edit.png height=30 width=30>
                            </a>
                            <a onclick="del(<?php echo $row['car_details_id']; ?>)">
                                <image src=img/Delete.png height=30 width=30>
                            </a>

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
function del(car_details_id) {
    if (confirm("Are you sure want to Delete ?")) {
        window.location.href = 'delete_car_details.php?car_details_id=' + car_details_id + '';
        return true;
    }
}

function edit(car_model_id) {
    if (confirm("Are you sure want to Edit ?")) {
        window.location.href = 'edit_car_details.php?car_details_id=' + car_model_id + '';
        //return true;
    }
}
</script>

<?php
    include("fff.php");
?>