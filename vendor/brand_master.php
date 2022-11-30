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
                <a href="#">Manage Vendor</a>
            </li>
            <li class="active">Brand Master</li>
        </ul>

        <div class="nav-search" id="nav-search">
            <form class="form-search">
                <span class="input-icon">
                    <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input"
                        autocomplete="off">
                    <i class="ace-icon fa fa-search nav-search-icon"></i>
                </span>
            </form>
        </div><!-- /.nav-search -->
    </div>
    <div class="page-header">

    </div><!-- /.page-header -->
</head>

<body class="no skin">
    <?php
        session_start();
		$vid=$_SESSION['vid'];
        $con=mysqli_connect("localhost","root","","tcc");

        if(isset($_POST['submit']))
        {
            $brand_name=$_POST['brand_name'];
            //$photo=$_POST['photo'];

			$file_name=$_FILES["brand_logo"]["name"];
			$file_temp=$_FILES["brand_logo"]["tmp_name"];
		
			$brand_logo=$_FILES["brand_logo"]["name"];
   			$dst="./img/".$brand_logo;

           $q=mysqli_query($con,"insert into brand_master values('','$brand_name','$file_name',$vid)");

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
            <form method="POST" action="" enctype="multipart/form-data" class="form-horizontal" role="form">

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Brand Name </label>

                    <div class="col-sm-9">
                        <input type="text" name="brand_name" id="brand_name" placeholder="Brand Name"
                            class="col-xs-10 col-sm-5" required />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Brand Logo </label>

                    <div class="col-sm-9">
                        <input type="file" name="brand_logo" id="brand_logo" placeholder="brand_logo"
                            class="col-xs-10 col-sm-5" required />
                    </div>
                </div>
                <div class="clearfix form-actions">
                    <div class="col-md-offset-3 col-md-9">
                        <input type="submit" name="submit" id="submit" class="btn btn-info">

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

                    <th>No</th>
                    <th>Brand Name</th>
                    <th>Brand Logo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
								include('connect.php');
								$q=mysqli_query($con,"select * from brand_master where vid=$vid");
								$i=1;
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

                    <!-- <td><?php echo $i; $i++; ?></td> -->
                    <td><?php echo $row['brand_id']; ?></td>
                    <td><?php echo $row['brand_name']; ?></td>
                    <td><?php echo "<image src='img/$row[2]' height=100 width=100>"; ?></td>

                    <td>
                        <div class="hidden-sm hidden-xs btn-group">

                            <a onclick="edit(<?php echo $row[0];?>)">
                                <image src=img/Edit.png height=30 width=30>
                            </a>
                            <a onclick="del(<?php echo $row[0]; ?>)">
                                <image src=img/Delete.png height=30 width=30>
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
    <script>
    function del(brand_id) {
        if (confirm("Are you sure want to Delete ?")) {
            window.location.href = 'delete_brand_master.php?brand_id=' + brand_id + '';
            return true;
        }
    }

    function edit(brand_id) {
        if (confirm("Are you sure want to Edit ?")) {
            window.location.href = 'edit_brand_master.php?brand_id=' + brand_id + '';
            return true;
        }
    }
    </script>

    <?php
    include("fff.php");
?>