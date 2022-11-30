<?php
    include("hhh.php");
    // error_reporting(1);
?>

<?php
    $car_model_id=$_GET['car_model_id'];
    include 'connect.php';

    $q=mysqli_query($con,"select * from car_model where car_model_id=$car_model_id");
    $row=mysqli_fetch_array($q);
?>

<br>
<br>
<h1> Edit Car Model </h1>
<br>
<br>
<br>
<hr>
<form method="POST" action="" enctype="multipart/form-data" class="form-horizontal" role="form">

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Car Model Name </label>

        <div class="col-sm-9">
            <input type="text" name="car_model_name" id="car_model_name" value="<?php echo $row['car_model_name'];?>"
                class="col-xs-10 col-sm-5" required />
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Car Model Year </label>

        <div class="col-sm-9">
            <input type="text" name="car_model_year" id="car_model_year" value="<?php echo $row['car_model_year'];?>"
                class="col-xs-10 col-sm-5" required />
        </div>
    </div>



    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Car Model Front Photo </label>

        <div class="col-sm-9">
            <image src='img/<?php echo $row['car_model_front_photo'];?>' height=100 width=100>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Car Model Rear Photo </label>

        <div class="col-sm-9">
            <image src='img/<?php echo $row['car_model_rear_photo'];?>' height=100 width=100>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Car Model Interior Photo </label>

        <div class="col-sm-9">
            <image src='img/<?php echo $row['car_model_interior_photo'];?>' height=100 width=100>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Car Model Side Photo </label>

        <div class="col-sm-9">
            <image src='img/<?php echo $row['car_model_side_photo'];?>' height=100 width=100>
        </div>
    </div>

    <!-- <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Photo </label>

										<div class="col-sm-9">
											<input type="file" name="car_model_front_photo" id="car_model_front_photo" class="col-xs-10 col-sm-5" required/>
										</div>
									</div> -->


    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Car Model Front Photo </label>

        <div class="col-sm-9">
            <input type="file" name="car_model_front_photo" id="car_model_front_photo"
                placeholder="car_model_front_photo" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Car Model Rear Photo </label>

        <div class="col-sm-9">
            <input type="file" name="car_model_rear_photo" id="car_model_rear_photo" placeholder="car_model_rear_photo"
                class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Car Model Interior Photo </label>

        <div class="col-sm-9">
            <input type="file" name="car_model_interior_photo" id="car_model_interior_photo"
                placeholder="car_model_interior_photo" class="col-xs-10 col-sm-5" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Car Model Side Photo </label>

        <div class="col-sm-9">
            <input type="file" name="car_model_side_photo" id="car_model_side_photo" placeholder="car_model_side_photo"
                class="col-xs-10 col-sm-5" />
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
            <a href="car_model.php"> Back to Car Model </a>
        </div>
    </div>
</form>

<?php
                    if(isset($_POST["submit"]))
                    {
                        $car_model_name=$_POST['car_model_name'];
                        $car_model_year=$_POST['car_model_year'];

                            $file_name=$_FILES["car_model_front_photo"]["name"];
                            $file_temp=$_FILES["car_model_front_photo"]["tmp_name"];


                            if($file_name=='')
                            {
                                
                                $file_name=$row['car_model_front_photo'];
                            }
                            else
                            {
                                $file_name = $_FILES["car_model_front_photo"]["name"];
                                $file_temp = $_FILES["car_model_front_photo"]["tmp_name"];
                            }
                            
                            $file_name1=$_FILES["car_model_rear_photo"]["name"];
                            $file_temp1=$_FILES["car_model_rear_photo"]["tmp_name"];

                            if($file_name1=='')
                            {
                                
                                $file_name1=$row['car_model_rear_photo'];
                            }
                            else
                            {
                                $file_name1 = $_FILES["car_model_rear_photo"]["name"];
                                $file_temp1 = $_FILES["car_model_rear_photo"]["tmp_name"];
                            }
                        
                            $file_name2=$_FILES["car_model_interior_photo"]["name"];
                            $file_temp2=$_FILES["car_model_interior_photo"]["tmp_name"];

                            if($file_name2=='')
                            {
                                
                                $file_name2=$row['car_model_interior_photo'];
                            }
                            else
                            {
                                $file_name2 = $_FILES["car_model_interior_photo"]["name"];
                                $file_temp2 = $_FILES["car_model_interior_photo"]["tmp_name"];
                            }

                            $file_name3=$_FILES["car_model_side_photo"]["name"];
                            $file_temp3=$_FILES["car_model_side_photo"]["tmp_name"];

                            if($file_name3=='')
                            {
                                
                                $file_name3=$row['car_model_side_photo'];
                            }
                            else
                            {
                                $file_name3 = $_FILES["car_model_side_photo"]["name"];
                                $file_temp3 = $_FILES["car_model_side_photo"]["tmp_name"];
                            }
                            

                        $q=mysqli_query($con,"update car_model set car_model_name='$car_model_name',car_model_year='$car_model_year',car_model_front_photo='$file_name',car_model_rear_photo= '$file_name1',car_model_interior_photo='$file_name2',car_model_side_photo='$file_name3' where car_model_id=$car_model_id");
                        $row=mysqli_fetch_array($q);

                        if($q)
                        {
                            move_uploaded_file($file_temp,"img/" . $file_name );
                            move_uploaded_file($file_temp1,"img/" . $file_name1 );
                            move_uploaded_file($file_temp2,"img/" . $file_name2 );
                            move_uploaded_file($file_temp3,"img/" . $file_name3 );
                            //header('location:service_master.php');
                            echo "<script>window.location.assign('car_model.php');</script>";
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