<?php
    include("hhh.php");
    // error_reporting(1);
?>

<?php
    $car_id=$_GET['car_id'];
    include 'connect.php';

    $q=mysqli_query($con,"select * from car_master where car_id=$car_id");
    $row=mysqli_fetch_array($q);
?>
                                
                                <br>
                                <br>
                                <h1>  Edit Car Master  </h1>
                                <br>
                                <br>
                                <br>
                                <hr>
                                <form method="POST" action="" enctype="multipart/form-data" class="form-horizontal" role="form" >
									
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Car name </label>

										<div class="col-sm-9">
											<input type="text" name="car_name" id="car_name" value="<?php echo $row['car_name'];?>" class="col-xs-10 col-sm-5" required/>
										</div>
									</div>

                                    
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Car Photo </label>

										<div class="col-sm-9">
											<image src='img/<?php echo $row['car_photo'];?>' height=100 width=100>
										</div>
									</div>
    
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Car Photo </label>

										<div class="col-sm-9">
											<input type="file" name="car_photo" id="car_photo" class="col-xs-10 col-sm-5" required/>
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
                                            <a href="car_master.php"> Back to Car Master</a>
										</div>
									</div>							
								</form>

                <?php
                    if(isset($_POST["submit"]))
                    {
                        // $sname=$_POST['sname'];
                        $car_name=$_POST['car_name'];
                      
                        //$car_photo=$_POST['car_photo'];

                            $file_name=$_FILES["car_photo"]["name"];
                            $file_temp=$_FILES["car_photo"]["tmp_name"];
                            
                            $car_photo=$_FILES["car_photo"]["name"];
                            $dst="./img/".$car_photo;

                        $q=mysqli_query($con,"update car_master set car_name='$car_name',car_photo='$file_name' where car_id=$car_id");
                        $row=mysqli_fetch_array($q);

                        if($q)
                        {
                            move_uploaded_file($_FILES['car_photo']['tmp_name'],$dst);
                            //header('location:service_master.php');
                            echo "<script>window.location.assign('car_master.php');</script>";
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