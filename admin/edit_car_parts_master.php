<?php
    include("hhh.php");
    error_reporting(1);
?>

<?php
    $cpmid=$_GET['cpmid'];
    include 'connect.php';

    $q=mysqli_query($con,"select * from car_parts_master where cpmid=$cpmid");
    $row=mysqli_fetch_array($q);
?>
                                
                                <br>
                                <br>
                                <h1>  Edit_Car_Parts_Master  </h1>
                                <br>
                                <br>
                                <br>
                                <hr>
                                <form method="POST" action="" enctype="multipart/form-data" class="form-horizontal" role="form" >
									
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> car_parts_name </label>

										<div class="col-sm-9">
											<input type="text" name="cpname" id="cpname" value="<?php echo $row['cpname'];?>" class="col-xs-10 col-sm-5" required/>
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Photo </label>

										<div class="col-sm-9">
											<image src='img/<?php echo $row['photo'];?>' height=100 width=100>
										</div>
									</div>
    
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Photo </label>

										<div class="col-sm-9">
											<input type="file" name="photo" id="photo" class="col-xs-10 col-sm-5" required/>
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
                                            <a href="car_parts_master.php"> Back to Car_parts_master </a>
										</div>
									</div>							
								</form>

                <?php
                 error_reporting(1);
                    if(isset($_POST["submit"]))
                    {
                        $cpname=$_POST['cpname'];
                        //$photo=$_POST['photo'];

                            $file_name=$_FILES["photo"]["name"];
                            $file_temp=$_FILES["photo"]["tmp_name"];
                            
                            $photo=$_FILES["photo"]["name"];
                            $dst="./img/".$photo;

                        $q=mysqli_query($con,"update car_parts_master set cpname='$cpname',photo='$file_name' where cpmid=$cpmid");
                        $row=mysqli_fetch_array($q);

                        if($q)
                        {
                            move_uploaded_file($_FILES['photo']['tmp_name'],$dst);
                            //header('location:car_parts_master.php');
                            echo "<script>window.location.assign('car_parts_master.php');</script>";
                        }
                        else
                        {
                            echo "<script>alert('Not Updated.....plz try again....');</script>";
                        }
                    }
                ?>

<?php
    include("fff.php");
?>