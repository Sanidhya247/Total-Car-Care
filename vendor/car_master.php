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
            <li class="active">car_master</li>
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
			$car_name=$_POST['car_name'];
			
			//$car_photo=$_POST['car_photo'];

			$file_name=$_FILES["car_photo"]["name"];
			$file_temp=$_FILES["car_photo"]["tmp_name"];
		
			$car_photo=$_FILES["car_photo"]["name"];
   			$dst="./img/".$car_photo;

           $q=mysqli_query($con,"insert into car_master values('',$brand_id,'$car_name','$file_name',$vid)");

					//echo "insert into car_master values('',$brand_id,$car_name','$price',$description','$car_car_photo')"


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
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Select Brand </label>

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
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Car Name </label>

                    <div class="col-sm-9">
                        <input type="text" name="car_name" id="car_name" placeholder="car name"
                            class="col-xs-10 col-sm-5" required />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Car Photo </label>

                    <div class="col-sm-9">
                        <input type="file" name="car_photo" id="car_photo" placeholder="car_photo"
                            class="col-xs-10 col-sm-5" required />
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


                    <th>Sr. No</th>
                    <th>Brand Name</th>
                    <th>Car Name</th>
                    <th>Car Photo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
								include('connect.php');
								$i=1;
								 $vid=$_SESSION['vid'];
								$q=mysqli_query($con,"select cm.*,bm.* from brand_master bm,car_master cm where bm.brand_id=cm.brand_id and cm.vid=$vid");
								while($row=mysqli_fetch_array($q))
								{
								?>
                <tr>

                    <td><?php echo $i;
                    $i++; ?></td>
                    <td><?php echo $row['brand_name']; ?></td>
                    <td><?php echo $row['car_name']; ?></td>
                    <td><?php echo "<image src='img/$row[3]' height=100 width=100>"; ?></td>

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
function del(car_id) {
    if (confirm("Are you sure want to Delete ?")) {
        window.location.href = 'delete_car_master.php?car_id=' + car_id + '';
        return true;
    }
}

function edit(car_id) {
    if (confirm("Are you sure want to Edit ?")) {
        window.location.href = 'edit_car_master.php?car_id=' + car_id + '';
        //return true;
    }
}
</script>

<?php
    include("fff.php");
?>