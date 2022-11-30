<?php
    include("hhh.php");
    // error_reporting(1);
?>

<?php
    $car_details_id=$_GET['car_details_id'];
    include ('connect.php');

    $q=mysqli_query($con,"select * from car_details where car_details_id=$car_details_id");
    $row=mysqli_fetch_array($q);
?>

<br>
<br>
<h1> Edit Car Details </h1>
<br>
<br>
<br>
<hr>
<form method="POST" action="" enctype="multipart/form-data" class="form-horizontal" role="form">



    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Fuel Type </label>

        <div class="col-sm-9">
            <input type="text" name="fuel_type" id="fuel_type" value="<?php echo $row['fuel_type'];?>"
                class="col-xs-10 col-sm-5" required />
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Engine CC </label>

        <div class="col-sm-9">
            <input type="text" name="engine_cc" id="engine_cc" value="<?php echo $row['engine_cc'];?>"
                class="col-xs-10 col-sm-5" required />
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Colour </label>

        <div class="col-sm-9">
            <input type="text" name="colour" id="colour" value="<?php echo $row['colour'];?>" class="col-xs-10 col-sm-5"
                required />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Seat </label>

        <div class="col-sm-9">
            <input type="text" name="seat" id="seat" value="<?php echo $row['seat'];?>" class="col-xs-10 col-sm-5"
                required />
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Price </label>

        <div class="col-sm-9">
            <input type="text" name="price" id="price" value="<?php echo $row['price'];?>" class="col-xs-10 col-sm-5"
                required />
        </div>
    </div>








    < <div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <input type="submit" name="submit" id="submit" class="btn btn-info">

            &nbsp; &nbsp; &nbsp;
            <button class="btn" type="reset">
                <i class="ace-icon fa fa-undo bigger-110"></i>
                Reset
            </button>
            <a href="car_details.php"> Back to Car Details </a>
        </div>
        </div>
</form>

<?php
                    if(isset($_POST["submit"]))
                    {
                            $fuel_type=$_POST['fuel_type'];
                            $engine_cc=$_POST['engine_cc'];
                            $colour=$_POST['colour'];
                            $seat=$_POST['seat'];
                            $price=$_POST['price'];

                           

                        // $q=mysqli_query($con,"update car_details set fuel_type='$fuel_type',engine_cc='$engine_cc',colour='$colour',$seat='seat', rc_front_photo='$file_name',rc_rear_photo= '$file_name1' where car_details_id=$car_details_id");
                        $q=mysqli_query($con,"update car_details set fuel_type='$fuel_type',engine_cc='$engine_cc',colour='$colour',seat='$seat',price='$price' where car_details_id=$car_details_id");
                        //  echo "update car_details set fuel_type='$fuel_type',engine_cc='$engine_cc',colour='$colour',seat='$seat', rc_front_photo='$file_name',rc_rear_photo= '$file_name1' where car_details_id=$car_details_id";
                        // $row=mysqli_fetch_array($q);
                        // if($q)
                        // echo "updated";
                        // else
                        // echo "not";

                        if($q)
                        {
                            move_uploaded_file($file_temp,"img/" . $file_name );
                            move_uploaded_file($file_temp1,"img/" . $file_name1 );
                            //header('location:service_master.php');
                            echo "<script>window.location.assign('car_details.php');</script>";
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