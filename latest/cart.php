<?php
// session_start();
include("h1.php");
?>
<html>

<head>
    <style>
    .mk {
        width: 25px;
    }

    /* .pk{

} */
    </style>
</head>

<body>
    <?php 
if(isset($_POST['submit']))
    {
            // $to =$_POST['email'];
            // $_SESSION['email']=$email;
            // $subject = "Test mail";
            // $message = "hiii ";
            // $from = "totalcarcare5@gmail.com";
            
            // if (mail($to, $subject, $message, $headers) ) 
            // {
            //     echo "sended...";
            // } else {
            //     echo " not sended...";
            // }
                // include('connect.php');
                // $uid=$_SESSION['uid'];

                // $q10=mysqli_query($con,"insert into parts_histry values('',$uid,'$total3')");
                // if($q10)
                // {
                //     echo "ok";
                // }
                // else
                // {
                //     echo "not";
                // }
                // // echo "<script>alert('hiii');</script>";

    }

?>

    <!--====================================================
                       HOME-P
======================================================-->
    <div id="home-p" class="home-p pages-head3 text-center">
        <div class="container">
            <h1 class="wow fadeInUp" data-wow-delay="0.1s">Shoping Box</h1>
        </div>
        <!--/end container-->
    </div>

    <!--====================================================
                        CART
======================================================-->

    <section id="cart" class="cart">
        <div class="container">
            <table id="cart" class="table table-hover table-condensed">
                <thead>
                    <tr>
                        <th style="width:50%">Product</th>
                        <th style="width:10%">Price</th>
                        <th style="width:8%">Quantity</th>
                        <th style="width:22%" class="text-center">Subtotal</th>
                        <th style="width:10%"></th>
                    </tr>
                </thead>
                <?php
                include('connect.php');
                $total=0;

                $uid=$_SESSION['uid'];
                $q=mysqli_query($con,"select * from pacart where uid=$uid");
                while($row=mysqli_fetch_array($q))
                {
            ?>
                <tbody>
                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-sm-2 hidden-xs">
                                    <?php
                                // for car parts add to cart
                                //   $paa_total=$_SESSION['total'];
                                  //  $_SESSION['pa_total']=$total;

                                  $cpdid=$row['cpdid'];
                                  $_SESSION['cpdid']=$cpdid;
                                  $q1=mysqli_query($con,"select * from car_parts_details where cpdid=$cpdid");
                                  $row1=mysqli_fetch_array($q1);
                                  echo "<img src='../admin/img/$row1[photo]'
                                  class='img-responsive' height=100 width=100/>";
                                ?>
                                </div>

                                <div class="col-sm-10 prod-desc">
                                    <h6 class="nomargin" style=" margin-left: 55px; font-weight: 1000;"> <?php  
                                    echo $row1['cpdname']?></h6>
                                    <p style=" margin-left: 55px; "><?php echo $row1['description'];?>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">&#8377;<?php 
                       
                        echo $row1['price']; ?></td>

                        <td class="pk">
                            <?php echo "<a href=pdecree.php?x=$row[0]>";?>-</a>
                            <input type="text" class="mk" value="<?php echo $row['qty'];?> " readonly>
                            <?php echo "<a href=pincre.php?x=$row[0]>";?>+</a>
                        </td>


                        </td>
                        <td data-th="Subtotal" class="text-center">
                            &#8377;<?php
                            $cartid=$row[0];
                            $q5=mysqli_query($con,"select * from pacart where cartid=$cartid");
                            $row5=mysqli_fetch_array($q5);
                            $qua=$row5['qty'];
                            $price=$row1['price'];
                            $subtotal=$price*$qua;
                            $q7=mysqli_query($con,"update pacart set subtotal=$subtotal where cartid=$row[0]");
                            $total=$total+$subtotal;
                            echo "$subtotal";
                            // $q9=mysqli_query($con,"update pacart set total=$total where cartid=$row[0]");
                            $_SESSION['pa_total']=$total;
                            $_SESSION['pa_qty']=$qua;
                            // $_SESSION['pa_id']=$cartid;


                            //  $q10=mysqli_query($con,"insert into cart_master values('',$uid,'$subtotal','','$total','')");
                        ?>
                        </td>
                        <td class="actions" data-th="">
                            <?php
                            echo "<a href='delete_cart.php?y=$cartid'>
                                <image src=img/x.png height=30 width=30 />
                            </a>";
                            ?>

                        </td>
                    </tr>
                    <?php
                if(isset($_POST['submit']))
                {
                    $a=$row1['cpdname'];
                    $b=$row1['photo'];
                    $f=$row['tdate'];
                    $e=$subtotal;
                    $d=$row1['price'];
                    $c=$row['qty']; 

                    // $a1=$row2['cadname'];
                    // $b1=$row2['photo'];
                    // $f1=$row['acdate'];
                    // $e1=$subtotal1;
                    // $d1=$row2['price'];
                    // $c1=$row['qty']; 

                    $q9=mysqli_query($con,"insert into parts_history values('',$uid,'$a','$b',$c,$d,$e,'$f')");
                  //  $q12=mysqli_query($con,"insert into acc_history values('',$uid,'$a1','$b1',$c1,$d1,$e1,'$f1')");
                  echo "<script>window.location.assign('order/orderconfirm.php');</script>";

                }   
                }  
                ?>

                    <?php
                    $uid=$_SESSION['uid'];
                    $total1=0;
                    $q2=mysqli_query($con,"select * from acccart where uid=$uid");
                    while($row2=mysqli_fetch_array($q2))
                    {
                        
                ?>
                <tbody>
                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-sm-2 hidden-xs">
                                    <?php
                                //   for car acc add to cart
                                    $cadid=$row2['cadid'];
                                    $_SESSION['cadid']=$cadid;
                                   $q3=mysqli_query($con,"select * from car_accessories_details where cadid=$cadid");
                                   $row3=mysqli_fetch_array($q3);
                                   echo "<img src='../admin/img/$row3[photo]'
                                   class='img-responsive' height=100 width=100/>";
                                ?>
                                </div>
                                <div class="col-sm-10 prod-desc">
                                    <h6 class="nomargin" style=" margin-left: 55px; font-weight: 1000;">
                                        <?php  echo $row3['cadname']?></h6>
                                    <p style=" margin-left: 55px; "><?php  echo $row3['description'];?> </p>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">&#8377;<?php echo $row3['price']; ?></td>

                        <td><?php echo "<a href=decree.php?x=$row2[0]>";?>-</a>
                            <input type="text" class="mk" width="25px" value="<?php echo $row2['qty'];?> " readonly>
                            <?php echo "<a href=incre.php?x=$row2[0]>";?>+</a>
                        </td>

                        <!-- <td data-th="Quantity">
                        <input type="number" class="form-control text-center" value="1">
                    </td> -->
                        <td data-th="Subtotal" class="text-center">
                            &#8377;<?php
                            // $acct_id=$row3[0];
                            $acccartid=$row2[0];
                            $q4=mysqli_query($con,"select * from acccart where acccartid= $acccartid");
                            $row4=mysqli_fetch_array($q4);
                            $qua2=$row4['qty'];
                            $price2=$row3['price'];
                            $subtotal1=$price2*$qua2;
                            $q6=mysqli_query($con,"update acccart set subtotal1=$subtotal1 where acccartid=$row2[0]");
                            $total1=$total1+$subtotal1;

                            echo "$subtotal1";
                            // $q8=mysqli_query($con,"update acccart set total1=$total1 where acccartid=$row2[0]");
                            $_SESSION['acc_qty']=$qua2;
                            $_SESSION['acc_total']=$total1;
                            // $_SESSION['acc_id']=$acct_id;
                        ?>
                        </td>
                        <td class="actions" data-th="">
                            <?php
                            echo "<a href='delete_acc_cart.php?b=$acccartid'>
                                <image src=img/x.png height=30 width=30 />
                            </a>";
                            ?>

                        </td>
                    </tr>
                    <?php
                                if(isset($_POST['submit']))
                                {
                                    // $a=$row1['cpdname'];
                                    // $b=$row1['photo'];
                                    // $f=$row['tdate'];
                                    // $e=$subtotal;
                                    // $d=$row1['price'];
                                    // $c=$row['qty']; 
                
                                    $a1=$row3['cadname'];
                                    $b1=$row3['photo'];
                                    $f1=$row4['atdate'];
                                    $e1=$subtotal1;
                                    $d1=$row3['price'];
                                    $c1=$row4['qty']; 
                
                              //      $q9=mysqli_query($con,"insert into parts_history values('',$uid,'$a','$b',$c,$d,$e,'$f')");
                                    $q12=mysqli_query($con,"insert into acc_history values('',$uid,'$a1','$b1',$c1,$d1,$e1,'$f1')");
                                    echo "<script>window.location.assign('order/orderconfirm.php');</script>";

                                }   
                   
                }
                ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td><a href="index.php" class="btn btn-general btn-white"><i class="fa fa-angle-left"></i>
                                Continue
                                Shopping</a></td>
                        <td colspan="2" class="hidden-xs"></td>



                        <td class="hidden-xs text-center">

                            <strong>Accessories Total
                                &#8377;<?php 
                                echo $total1; 
                            ?>
                            </strong>
                            <div>
                                <strong>Parts Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &#8377;<?php 
                                    echo $total;
                                ?>
                                </strong>
                            </div>
                            <hr>
                            <strong> Total
                                &#8377;<?php
                            
                                    $total3=$total+$total1;
                                    echo "$total3";
                                    include('connect.php');
                                    $uid=$_SESSION['uid'];
                                     $_SESSION['total5']=$total3;
                                    

                                ?>
                            </strong>
                        </td>
                        <td class="hidden-xs text-center">

                        </td>

                        <td>
                            <form method=post>
                                <a href="order/orderconfirm.php">
                                    <input type=submit class="btn btn-general btn-green" name="submit" value="Checkout">
                                </a>
                            </form>
                        </td>
                        </td>
                    </tr>
                </tfoot>

            </table>

        </div>
    </section>

</body>

</html>
<!-- <?php
    // include("f1.php");
?> -->