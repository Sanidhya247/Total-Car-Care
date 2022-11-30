<?php
    include("hhh.php");
    error_reporting(1);
?>

<?php
    $cuid=$_GET['cuid'];
    include 'connect.php';

    $q=mysqli_query($con,"select * from contact_us where cuid=$cuid");
    $row=mysqli_fetch_array($q);
?>
                                
                                <br>
                                <br>
                                <h1>  Edit Contact Us </h1>
                                <br>
                                <br>
                                <br>
                                <hr>
                                <form method="POST" action="" enctype="multipart/form-data" class="form-horizontal" role="form" >
									
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Name </label>

										<div class="col-sm-9">
											<input type="text" name="name" id="name" value="<?php echo $row['name'];?>" class="col-xs-10 col-sm-5" required/>
										</div>
									</div>

                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Email</label>

										<div class="col-sm-9">
											<input type="text" name="email" id="email" value="<?php echo $row['email'];?>" class="col-xs-10 col-sm-5" required/>
										</div>
									</div>

                                    
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Address</label>

										<div class="col-sm-9">
											<input type="text" name="address" id="address" value="<?php echo $row['address'];?>" class="col-xs-10 col-sm-5" required/>
										</div>
									</div>

                                    
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Mobile No</label>

										<div class="col-sm-9">
											<input type="text" name="mobileno" id="mobileno" value="<?php echo $row['mobileno'];?>" class="col-xs-10 col-sm-5" required/>
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
                                            <a href="contact_us.php"> Back to Contact us section</a>
										</div>
									</div>							
								</form>

                <?php
                 error_reporting(1);
                    if(isset($_POST["submit"]))
                    {
                        $name=$_POST['name'];
                        $email=$_POST['email'];
                        $address=$_POST['address'];
                        $mobileno=$_POST['mobileno'];
                        
                        $q=mysqli_query($con,"update contact_us set name='$name',email='$email',address='$address',mobileno='$mobileno' where cuid=$cuid");
                      //  $row=mysqli_fetch_array($q);

                        if($q)
                        {
                            //move_uploaded_file($_FILES['photo']['tmp_name'],$dst);
                            //header('location:car_parts_master.php');
                           
                            echo "<script>window.location.assign('contact_us.php');</script>";
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