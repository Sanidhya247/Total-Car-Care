<?php
include('hhh.php');
?>

<div class="col-xs-20 col-sm-9">

    <!--script>
.btn.btn-app.btn-sm {
    width: 100px;
    font-size: 250px;
    border-radius: 10px;
    line-height: 2.5;
}
</script>
<script>
	.line-height-1 bigger-170 blue{
		width: 200px;
		border-radius: 10px;
    line-height: 2.5;
	}
	</script-->


    <h1>
        <div class="center" style="height: 5000px;">
            <span class="btn btn-app btn-sm btn-grey no-hover">
                <span class="line-height-1 bigger-170">
                    <?php 
						include('connect.php');
						$q4=mysqli_query($con,"select * from vendor_master");
						$row4=mysqli_num_rows($q4);
						echo '<h4 style="height : 0px ;" >'.$row4. '</h4>'; 

					?></span>

                <br />
                <span class="line-height-1 smaller-90"> Vendor </span>
            </span>
            <span class="btn btn-app btn-sm btn-light no-hover">
                <span class="line-height-1 bigger-170 blue">
                    <?php 
						include('connect.php');
						$q=mysqli_query($con,"select * from brand_master");
						$row=mysqli_num_rows($q);
						echo '<h4 style="height : 0px ;" >'.$row. '</h4>'; 

					?>
                </span>

                <br />
                <span class="line-height-1 smaller-90"> Brand </span>
            </span>

            <span class="btn btn-app btn-sm btn-yellow no-hover">
                <span class="line-height-1 bigger-170">
                    <?php 
						include('connect.php');
						$q2=mysqli_query($con,"select * from car_master");
						$row2=mysqli_num_rows($q2);
						echo '<h4 style="height : 0px ;" >'.$row2. '</h4>'; 

					?>
                </span>

                <br />
                <span class="line-height-1 smaller-90"> Car </span>
            </span>

            <span class="btn btn-app btn-sm btn-pink no-hover">
                <span class="line-height-1 bigger-170">
                    <?php 
						include('connect.php');
						$q3=mysqli_query($con,"select * from car_model");
						$row3=mysqli_num_rows($q3);
						echo '<h4 style="height : 0px ;" >'.$row3. '</h4>'; 

					?>
                </span>

                <br />
                <span class="line-height-1 smaller-90"> Car Model </span>
            </span>




        </div>
    </h1>





    <?php
include('fff.php');
?>