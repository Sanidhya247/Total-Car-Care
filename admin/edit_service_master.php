<?php
    include("hhh.php");
    error_reporting(1);
?>

<?php
    $sid=$_GET['sid'];
    include 'connect.php';

    $q=mysqli_query($con,"select * from service_master where sid=$sid");
    $row=mysqli_fetch_array($q);
?>
                                
                                <br>
                                <br>
                                <h1>  edit_service_master  </h1>
                                <br>
                                <br>
                                <br>
                                <hr>
                                <form method="POST" action="" enctype="multipart/form-data" class="form-horizontal" role="form" >
									
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Service_name </label>

										<div class="col-sm-9">
											<input type="text" name="sname" id="sname" value="<?php echo $row['sname'];?>" class="col-xs-10 col-sm-5" required/>
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
                                            <a href="service_master.php"> Back to Service_master </a>
										</div>
									</div>							
								</form>

                <?php
                    if(isset($_POST["submit"]))
                    {
                        $sname=$_POST['sname'];
                        //$photo=$_POST['photo'];

                            $file_name=$_FILES["photo"]["name"];
                            $file_temp=$_FILES["photo"]["tmp_name"];
                            
                            $photo=$_FILES["photo"]["name"];
                            $dst="./img/".$photo;

                        $q=mysqli_query($con,"update service_master set sname='$sname',photo='$file_name' where sid=$sid");
                        $row=mysqli_fetch_array($q);

                        if($q)
                        {
                            move_uploaded_file($_FILES['photo']['tmp_name'],$dst);
                            //header('location:service_master.php');
                            echo "<script>window.location.assign('service_master.php');</script>";
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