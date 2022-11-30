<?php
    include("hhh.php");
    // error_reporting(1);
?>

<?php
    $brand_id=$_GET['brand_id'];
    include 'connect.php';

    $q=mysqli_query($con,"select * from brand_master where brand_id=$brand_id");
    $row=mysqli_fetch_array($q);
?>
                                
                                <br>
                                <br>
                                <h1>  Edit Brand Master  </h1>
                                <br>
                                <br>
                                <br>
                                <hr>
                                <form method="POST" action="" enctype="multipart/form-data" class="form-horizontal" role="form">
									
                                    <div class="form-group" >

                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Brand Name</label>

                                        <div class="col-sm-9">

                                        <input type="text" name="brand_name" id="brand_name" value="<?php echo $row['brand_name'];?>"  class="col-xs-10 col-sm-5" required>
                                        </div>
                                    </div>

                                    <div class="form-group" >

                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Brand logo </label>

                                        <div class="col-sm-9">
										    <image src='img/<?php echo $row['brand_logo'];?>' height=100 width=100>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Brand logo </label>

                                        <div class="col-sm-9">
                                        <input type="file" name="brand_logo"  id="brand_logo" class="col-xs-10 col-sm-5" placeholder="Brand logo">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-offset-3 col-md-9">
                                            <input type="submit" name="submit" id="submit" class="btn btn-primary btn-round px-5"> 
                                        </div>
                                    </div>
                                </form>

                <?php
                    if(isset($_POST["submit"]))
                    {
                        $brand_name=$_POST['brand_name'];
                        //$photo=$_POST['photo'];

                            $file_name=$_FILES["brand_logo"]["name"];
                            $file_temp=$_FILES["brand_logo"]["tmp_name"];
                            
                            $brand_logo=$_FILES["brand_logo"]["name"];
                            $dst="./img/".$brand_logo;

                        $q=mysqli_query($con,"update brand_master set brand_name='$brand_name',brand_logo='$brand_logo' where brand_id=$brand_id");
                        $row=mysqli_fetch_array($q);

                        if($q)
                        {
                            move_uploaded_file($_FILES['brand_logo']['tmp_name'],$dst);
                            //header('location:service_master.php');
                            echo "<script>window.location.assign('brand_master.php');</script>";
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