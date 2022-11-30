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
            <li class="active">Car Model</li>
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
            $car_id=$_POST['car_id'];
			$car_model_name=$_POST['car_model_name'];
            $car_model_year=$_POST['car_model_year'];

            $file_name=$_FILES["car_model_front_photo"]["name"];
			$file_temp=$_FILES["car_model_front_photo"]["tmp_name"];
		
            $file_name1=$_FILES["car_model_rear_photo"]["name"];
			$file_temp1=$_FILES["car_model_rear_photo"]["tmp_name"];
         
            $file_name2=$_FILES["car_model_interior_photo"]["name"];
			$file_temp2=$_FILES["car_model_interior_photo"]["tmp_name"];

            $file_name3=$_FILES["car_model_side_photo"]["name"];
			$file_temp3=$_FILES["car_model_side_photo"]["tmp_name"];
		
		
           $q=mysqli_query($con,"insert into car_model values('',$car_id,'$car_model_name',$car_model_year,'$file_name','$file_name1','$file_name2','$file_name3',$vid)");
        

            if($q)
            {
				move_uploaded_file($file_temp,"img/" . $file_name );
                move_uploaded_file($file_temp1,"img/" . $file_name1 );
                move_uploaded_file($file_temp2,"img/" . $file_name2 );
                move_uploaded_file($file_temp3,"img/" . $file_name3 );
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
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Car Model Name </label>

                    <div class="col-sm-9">
                        <input type="text" name="car_model_name" id="car_model_name" placeholder="car model name"
                            class="col-xs-10 col-sm-5" required />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Car Model Year </label>

                    <div class="col-sm-9">
                        <input type="text" name="car_model_year" id="car_model_year" placeholder="car model year"
                            class="col-xs-10 col-sm-5" required />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Car Model Front Photo
                    </label>

                    <div class="col-sm-9">
                        <input type="file" name="car_model_front_photo" id="car_model_front_photo"
                            placeholder="car_model_front_photo" class="col-xs-10 col-sm-5" required />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Car Model Rear Photo
                    </label>

                    <div class="col-sm-9">
                        <input type="file" name="car_model_rear_photo" id="car_model_rear_photo"
                            placeholder="car_model_rear_photo" class="col-xs-10 col-sm-5" required />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Car Model Interior Photo
                    </label>

                    <div class="col-sm-9">
                        <input type="file" name="car_model_interior_photo" id="car_model_interior_photo"
                            placeholder="car_model_interior_photo" class="col-xs-10 col-sm-5" required />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Car Model Side Photo
                    </label>

                    <div class="col-sm-9">
                        <input type="file" name="car_model_side_photo" id="car_model_side_photo"
                            placeholder="car_model_side_photo" class="col-xs-10 col-sm-5" required />
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


                    <th>Car Model Id </th>
                    <th>Car Name</th>
                    <th>Car Model Name</th>
                    <th>Car Model Year</th>
                    <th>Car Model Front Photo</th>
                    <th>Car Model Rear Photo</th>
                    <th>Car Model Interior Photo</th>
                    <th>Car Model Side Photo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
								include('connect.php');
                                $vid=$_SESSION['vid'];
								$q=mysqli_query($con,"select cmd.*,cm.* from car_master cm,car_model cmd where cm.car_id=cmd.car_id and cmd.vid=$vid");

								while($row=mysqli_fetch_array($q))
								{
								?>
                <tr>

                    <td><?php echo $row['car_model_id']; ?></td>
                    <td><?php echo $row['car_name']; ?></td>
                    <td><?php echo $row['car_model_name']; ?></td>
                    <td><?php echo $row['car_model_year']; ?></td>
                    <td><?php echo "<image src='img/$row[4]' height=100 width=100>"; ?></td>
                    <td><?php echo "<image src='img/$row[5]' height=100 width=100>"; ?></td>
                    <td><?php echo "<image src='img/$row[6]' height=100 width=100>"; ?></td>
                    <td><?php echo "<image src='img/$row[7]' height=100 width=100>"; ?></td>

                    <td>
                        <div class="hidden-sm hidden-xs btn-group">

                            <a onclick="edit(<?php echo $row[0];?>)">
                                <image src=img/Edit.png height=30 width=30>
                            </a>
                            <a onclick="del(<?php echo $row[0]; ?>)">
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
function del(car_model_id) {
    if (confirm("Are you sure want to Delete ?")) {
        window.location.href = 'delete_car_model.php?car_model_id=' + car_model_id + '';
        return true;
    }
}

function edit(car_model_id) {
    if (confirm("Are you sure want to Edit ?")) {
        window.location.href = 'edit_car_model.php?car_model_id=' + car_model_id + '';
        //return true;
    }
}
</script>

<?php
    include("fff.php");
?>