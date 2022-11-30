<?php
    include("hhh.php");
	// error_reporting(1);
?>

<html>

<div class="breadcrumbs ace-save-state" id="breadcrumbs">
    <ul class="breadcrumb">
        <li>
            <i class="ace-icon fa fa-home home-icon"></i>
            <a href="home.php">Home</a>
        </li>

        <li>
            <a href="#">Meet Our Team</a>
        </li>


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

<body class="no skin">
    <?php
        
        $con=mysqli_connect("localhost","root","","tcc");

        if(isset($_POST['submit']))
        {
            $name=$_POST['name'];
            $place=$_POST['place'];
            
            

			$file_name=$_FILES["photo"]["name"];
			$file_temp=$_FILES["photo"]["tmp_name"];
		
			$photo=$_FILES["photo"]["name"];
   			$dst="./img/".$photo;

           $q=mysqli_query($con,"insert into meet_our_team values('','$name',' $place','$file_name')");

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
            <form method="POST" action="" enctype="multipart/form-data" class="form-horizontal" role="form">

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Name </label>

                    <div class="col-sm-9">
                        <input type="text" name="name" id="name" placeholder="Name" class="col-xs-10 col-sm-5"
                            required />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Place </label>

                    <div class="col-sm-9">
                        <input type="text" name="place" id="place" placeholder="Place" class="col-xs-10 col-sm-5"
                            required />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Photo </label>

                    <div class="col-sm-9">
                        <input type="file" name="photo" id="photo" placeholder="photo" class="col-xs-10 col-sm-5"
                            required />
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
                    <th>Name</th>
                    <th>Place</th>
                    <th>Photo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
								include('connect.php');
								$q=mysqli_query($con,"select * from meet_our_team");
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

                    <td><?php echo $i; $i++; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['place']; ?></td>
                    <td><?php echo "<image src='img/$row[3]' height=100 width=100>"; ?></td>

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
    function del(mid) {
        if (confirm("Are you sure want to Delete ?")) {
            window.location.href = 'delete_meet_our_team.php?mid=' + mid + '';
            return true;
        }
    }

    function edit(mid) {
        if (confirm("Are you sure want to Edit ?")) {
            window.location.href = 'edit_meet_our_team.php?mid=' + mid + '';
            //return true;
        }
    }
    </script>

    <?php
    include("fff.php");
?>