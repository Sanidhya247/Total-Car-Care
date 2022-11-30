<?php
include('hhh.php');
include('connect.php');
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

    <div>


        <h1>
            <div class="center" style="height: 150px; margin-left: 285px;">
                <span class="btn btn-app btn-sm btn-light no-hover" style="height: 67px ;">
                    <span class="line-height-1 bigger-170 blue"> <?php
                                                    
                                                        $q=mysqli_query($con,"select * from registration ");
                                                        $row=mysqli_num_rows($q);
                                                        echo '<h4 style="height : 0px ;" >'.$row. '</h4>'; 


                                                        
                                                    ?></span>

                    <br />

                    <span class="line-height-1 smaller-90" style="color:black;">Users</span>
                </span>

                <span class="btn btn-app btn-sm btn-yellow no-hover " style="height: 67px ;">
                    <span class="line-height-1 bigger-170"> <?php
                                                       
                                                        $q3=mysqli_query($con,"select * from vendor_master ");
                                                        $row3=mysqli_num_rows($q3);
                                                        echo '<h4 style="height : 0px ;" >'.$row3. '</h4>'; 

                                                        
                                                    ?> </span>

                    <br />

                    <span class="line-height-1 smaller-90" style="color:black;"> Vendors </span>
                </span>

                <span class="btn btn-app btn-sm btn-pink no-hover" style="height: 67px ;">
                    <span class="line-height-1 bigger-170"> <?php
                                                       
                                                        $q4=mysqli_query($con,"select * from car_accessories_details ");
                                                        $row4=mysqli_num_rows($q4);
                                                        echo '<h4 style="height : 0px ;" >'.$row4. '</h4>';  
                                                        
                                                    ?></span>

                    <br />

                    <span class="line-height-1 smaller-90" style="color:black;"> Accessories </span>
                </span>

                <span class="btn btn-app btn-sm btn-grey no-hover" style="height: 67px ;">
                    <span class="line-height-1 bigger-170"> <?php
                                                       
                                                        $q5=mysqli_query($con,"select * from car_parts_details ");
                                                        $row5=mysqli_num_rows($q5);
                                                        echo '<h4 style="height : 0px ;" >'.$row5. '</h4>'
                                                        
                                                    ?> </span>

                    <br />

                    <span class="line-height-1 smaller-90" style="color:black;"> Parts</span>
                </span>

                <span class="btn btn-app btn-sm btn-success no-hover" style="height: 67px ;">
                    <span class="line-height-1 bigger-170"> <?php
                                                         

                                                        $q6=mysqli_query($con,"select * from service_detail ");
                                                        $row6=mysqli_num_rows($q6);
                                                        echo '<h4 style="height : 0px ;" >'.$row6. '</h4>'
                                                        
                                                        
                                                    ?> </span>

                    <br />

                    <span class="line-height-1 smaller-90" style="color:black;"> Service </span>
                </span>


            </div>
        </h1>
    </div>




    <div class="row" style="margin-left: 190px; width: 100%;">

        <div class="col-sm-5" style="margin-right: 80px;">
            <div class="widget-box transparent">
                <div class="widget-header widget-header-flat">
                    <h4 class="widget-title lighter">
                        <i class="ace-icon fa fa-star orange"></i>
                        Qty Stock Management (Parts)
                    </h4>

                    <div class="widget-toolbar">
                        <a href="#" data-action="collapse">
                            <i class="ace-icon fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>

                <div class="widget-body">
                    <div class="widget-main no-padding">

                        <table class="table table-bordered table-striped">
                            <thead class="thin-border-bottom">
                                <tr>
                                    <th>
                                        <i class="ace-icon fa fa-caret-right blue"></i>Parts Name
                                    </th>

                                    <th>
                                        Available Qty
                                    </th>

                                    <th class="hidden-480">
                                        <i class="ace-icon fa fa-caret-right blue"></i>status
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
								include('connect.php');
								$q=mysqli_query($con,"select * from car_parts_details");
								$i=1;
								while($row=mysqli_fetch_array($q))
								{
								?>
                                <tr>
                                    <td>
                                        <?php 
                                        
                                        echo "$row[cpdname]"; 
                                    ?>
                                    </td>

                                    <td>
                                        <?php echo "$row[qty]";?>
                                    </td>

                                    <td class="hidden-480">
                                        <!-- <span class="label label-info arrowed-right arrowed-in">Available</span> -->
                                        <!-- <span class='label label-info arrowed-right arrowed-in'>Available</span> -->
                                        <span>
                                            <?php
                                            $qty=$row['qty'];
                                            
                                            if($qty<=0)
                                            {
                                                echo " <span class='label label-danger arrowed'>OUT OF STOCK</span>";
                                            }
                                            elseif($qty<=3)
                                            {
                                                
                                                echo "<span class='label label-warning arrowed arrowed-right'>ADD PRODUCT</span>";
                                            }
                                            else
                                            {
                                                echo "<span class='label label-info arrowed-right arrowed-in'>AVAILABLE</span>";
                                            }
                                        ?>
                                        </span>
                                    </td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- acc stock -->
        <div class="col-sm-5">
            <div class="widget-box transparent">
                <div class="widget-header widget-header-flat">
                    <h4 class="widget-title lighter">
                        <i class="ace-icon fa fa-star orange"></i>
                        Qty Stock Management (Accessories)
                    </h4>

                    <div class="widget-toolbar">
                        <a href="#" data-action="collapse">
                            <i class="ace-icon fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>

                <div class="widget-body">
                    <div class="widget-main no-padding">

                        <table class="table table-bordered table-striped">
                            <thead class="thin-border-bottom">
                                <tr>
                                    <th>
                                        <i class="ace-icon fa fa-caret-right blue"></i>Accessories Name
                                    </th>

                                    <th>
                                        Available Qty
                                    </th>

                                    <th class="hidden-480">
                                        <i class="ace-icon fa fa-caret-right blue"></i>status
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
								include('connect.php');
								$q=mysqli_query($con,"select * from car_accessories_details");
								$i=1;
								while($row=mysqli_fetch_array($q))
								{
								?>
                                <tr>
                                    <td>
                                        <?php 
                                        
                                        echo "$row[cadname]"; 
                                    ?>
                                    </td>

                                    <td>
                                        <?php echo "$row[qty]";?>
                                    </td>

                                    <td class="hidden-480">
                                        <!-- <span class="label label-info arrowed-right arrowed-in">Available</span> -->
                                        <!-- <span class='label label-info arrowed-right arrowed-in'>Available</span> -->
                                        <span>
                                            <?php
                                            $qty=$row['qty'];
                                            
                                            if($qty<=0)
                                            {
                                                echo " <span class='label label-danger arrowed'>OUT OF STOCK</span>";
                                            }
                                            elseif($qty<4)
                                            {
                                                
                                                echo "<span class='label label-warning arrowed arrowed-right'>ADD PRODUCT</span>";
                                            }
                                            else
                                            {
                                                echo "<span class='label label-info arrowed-right arrowed-in'>AVAILABLE</span>";
                                            }
                                        ?>
                                        </span>
                                    </td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <?php
include('fff.php');
?>