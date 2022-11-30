<?php
    include("hhh.php");
    error_reporting(1);
?>

<?php
    $sdid=$_GET['sdid'];
    include 'connect.php';

    $q=mysqli_query($con,"select * from service_detail where sdid=$sdid");
    $row=mysqli_fetch_array($q);
?>
                                
                                <br>
                                <br>
                                <h1>  Edit Service Details  </h1>
                                <br>
                                <br>
                                <br>
                                <hr>
                                <form method="POST" action="" enctype="multipart/form-data" class="form-horizontal" role="form" >
									
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Service_detail_name </label>

										<div class="col-sm-9">
											<input type="text" name="sdname" id="sdname" value="<?php echo $row['sdname'];?>" class="col-xs-10 col-sm-5" required/>
										</div>
									</div>

                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Service_price </label>

										<div class="col-sm-9">
											<input type="text" name="price" id="price" value="<?php echo $row['price'];?>" class="col-xs-10 col-sm-5" required/>
										</div>
									</div>

                                    <div class="form-group"> cc
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Description </label>

										<div class="col-sm-9">
											<input type="text" name="description" id="description" value="<?php echo $row['description'];?>" class="col-xs-10 col-sm-5" required/>
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
                                            <a href="service_detail.php"> Back to Service_detail </a>
										</div>
									</div>							
								</form>

                <?php
                    if(isset($_POST["submit"]))
                    {
                        // $sname=$_POST['sname'];
                        $sdname=$_POST['sdname'];
                        $price=$_POST['price'];
                        $description=$_POST['description'];
                        //$photo=$_POST['photo'];

                            $file_name=$_FILES["photo"]["name"];
                            $file_temp=$_FILES["photo"]["tmp_name"];
                            
                            $photo=$_FILES["photo"]["name"];
                            $dst="./img/".$photo;

                        $q=mysqli_query($con,"update service_detail set sdname='$sdname',price='$price',description='$description',photo='$file_name' where sdid=$sdid");
                        $row=mysqli_fetch_array($q);

                        if($q)
                        {
                            move_uploaded_file($_FILES['photo']['tmp_name'],$dst);
                            //header('location:service_master.php');
                            echo "<script>window.location.assign('service_detail.php');</script>";
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