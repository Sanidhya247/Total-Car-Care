<?php
    include("hhh.php");
    // error_reporting(1);
?>

<?php
    $cpdid=$_GET['cpdid'];
    include 'connect.php';

    $q=mysqli_query($con,"select * from car_parts_details where cpdid=$cpdid");
    $row=mysqli_fetch_array($q);
?>
                                
                                <br>
                                <br>
                                <h1>  edit_car_parts_details  </h1>
                                <br>
                                <br>
                                <br>
                                <hr>
                                <form method="POST" action="" enctype="multipart/form-data" class="form-horizontal" role="form" >
									
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Car_Parts_Detail_Name </label>

										<div class="col-sm-9">
											<input type="text" name="cpdname" id="cpdname" value="<?php echo $row['cpdname'];?>" class="col-xs-10 col-sm-5" required/>
										</div>
									</div>

                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Description </label>

										<div class="col-sm-9">
											<input type="text" name="description" id="description" value="<?php echo $row['description'];?>" class="col-xs-10 col-sm-5" required/>
										</div>
									</div>

                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Car_Parts_QTY </label>

										<div class="col-sm-9">
											<input type="text" name="qty" id="qty" value="<?php echo $row['qty'];?>" class="col-xs-10 col-sm-5" required/>
										</div>
									</div>


                                    
                                    
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Car_Parts_price </label>

										<div class="col-sm-9">
											<input type="text" name="price" id="price" value="<?php echo $row['price'];?>" class="col-xs-10 col-sm-5" required/>
										</div>
									</div>

                                    
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Car_Parts_Photo </label>

										<div class="col-sm-9">
											<image src='img/<?php echo $row['photo'];?>' height=100 width=100>
										</div>
									</div>
    
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Car_Parts_Photo </label>

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
                                            <a href="car_parts_details.php"> Back to Car_Parts_details </a>
										</div>
									</div>							
								</form>

                <?php
                    if(isset($_POST["submit"]))
                    {
                        $cpname=$_POST['cpname'];
                        $cpdname=$_POST['cpdname'];
                        $description=$_POST['description'];
                        $qty=$_POST['qty'];
                        $price=$_POST['price'];
                        
                        //$photo=$_POST['photo'];

                            $file_name=$_FILES["photo"]["name"];
                            $file_temp=$_FILES["photo"]["tmp_name"];
                            
                            $photo=$_FILES["photo"]["name"];
                            $dst="./img/".$photo;

                        $q=mysqli_query($con,"update car_parts_details set cpdname='$cpdname',description='$description',qty='$qty',price='$price',photo='$file_name' where cpdid=$cpdid");
                        $row=mysqli_fetch_array($q);

                        if($q)
                        {
                            move_uploaded_file($_FILES['photo']['tmp_name'],$dst);
                            //header('location:service_master.php');
                            echo "<script>alert('Updated successfully.....');</script>";
                            echo "<script>window.location.assign('car_parts_details.php');</script>";
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