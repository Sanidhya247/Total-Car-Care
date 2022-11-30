<?php
    include("hhh.php");
    error_reporting(1);
?>

<?php
    $id=$_GET['id'];
    include 'connect.php';

    $q=mysqli_query($con,"select * from about_us where id=$id");
    $row=mysqli_fetch_array($q);
?>
                                
                                <br>
                                <br>
                                <h1>  Edit About Us </h1>
                                <br>
                                <br>
                                <br>
                                <hr>
                                <form method="POST" action="" enctype="multipart/form-data" class="form-horizontal" role="form" >
									
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Title </label>

										<div class="col-sm-9">
											<input type="text" name="title" id="title" value="<?php echo $row['title'];?>" class="col-xs-10 col-sm-5" required/>
										</div>
									</div>

                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Description </label>

										<div class="col-sm-9">
											<input type="text" name="description" id="description" value="<?php echo $row['description'];?>" class="col-xs-10 col-sm-5" required/>
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
                                            <a href="about_us.php"> Back to About us section</a>
										</div>
									</div>							
								</form>

                <?php
                 error_reporting(1);
                    if(isset($_POST["submit"]))
                    {
                        $title=$_POST['title'];
                        $description=$_POST['description'];
                        
                        $q=mysqli_query($con,"update about_us set title='$title',description='$description' where id=$id");
                      //  $row=mysqli_fetch_array($q);

                        if($q)
                        {
                            //move_uploaded_file($_FILES['photo']['tmp_name'],$dst);
                            //header('location:car_parts_master.php');
                           
                            echo "<script>window.location.assign('about_us.php');</script>";
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