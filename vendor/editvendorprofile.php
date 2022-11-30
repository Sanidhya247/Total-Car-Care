<?php
    include("hhh.php");
    error_reporting(1);
	session_start();
?>
<?php
    $vid=$_GET['vid'];
    include 'connect.php';

    $q=mysqli_query($con,"select * from vendor_master where vid=$vid");
   $row=mysqli_fetch_array($q);
?>



<body class="no-skin">
    <form method="POST">

        <div class="tabbable">
            <ul class="nav nav-tabs padding-18">
                <li class="active">
                    <a data-toggle="tab" href="#home">
                        <i class="green ace-icon fa fa-user bigger-120"></i>
                        Profile
                    </a>
                </li>
            </ul>

            <div class="tab-content no-border padding-24">
                <div id="home" class="tab-pane in active">
                    <div class="row">
                        <div class="col-xs-12 col-sm-3 center">
                            <span class="profile-picture">
                                <img class="editable img-responsive" alt="image" id="avatar2" <?php
																	$pic=$_SESSION['pic'];
							                                     	echo "<img class='nav-user-photo' src='img/$pic' />";
							                                    ?> </span>
                        </div><!-- /.col -->

                        <div class="col-xs-12 col-sm-9">
                            <h4 class="blue">
                                <span class="middle"><?php echo $_SESSION['vname'];?> </span>

                                <span class="label label-purple arrowed-in-right">
                                    <i class="ace-icon fa fa-circle smaller-80 align-middle"></i>
                                    online
                                </span>
                            </h4>

                            <div class="profile-user-info">
                                <div class="profile-info-row">
                                    <div class="profile-info-name"> vendorname :- </div>

                                    <div class="profile-info-value">
                                        <input type="text" name="vname" value="<?php echo $row['vname'];?>"
                                            placeholder="enter new name">
                                    </div>
                                </div>

                                <div class="profile-info-row">
                                    <div class="profile-info-name">Phone :-</div>

                                    <div class="profile-info-value">
                                        <input type="text" name="phone" value="<?php echo $row['phone'];?>"
                                            placeholder="enter your number">
                                    </div>
                                </div>

                                <div class="profile-info-row">
                                    <div class="profile-info-name">Email :-</div>

                                    <div class="profile-info-value">
                                        <input type="email" name="email" value="<?php echo $row['email'];?>"
                                            placeholder="enter your new email">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input class="btn btn-info" type="submit" name="save" value="save">
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /#home -->
            </div>
    </form>
</body>
<?php
                    if(isset($_POST["save"]))
                    {
                        $vid=$_POST['vid'];
                        $vname=$_POST['vname'];
                        $phone=$_POST['phone'];
                        $email=$_POST['email'];
                        //$photo=$_POST['photo'];

                          //  $file_name=$_FILES["brand_logo"]["name"];
                            //$file_temp=$_FILES["brand_logo"]["tmp_name"];
                            
                            //$brand_logo=$_FILES["brand_logo"]["name"];
                           // $dst="./img/".$brand_logo;

                        $q=mysqli_query($con,"update vendor_master set vname='$vname',phone='$phone',email='$email' where vid=$vid");
                      //  $row=mysqli_fetch_array($q);

                        if($q)
                        {
                            //move_uploaded_file($_FILES['brand_logo']['tmp_name'],$dst);
                            //header('location:service_master.php');
                            echo "<script>window.location.assign('profile.php');</script>";
                        }
                        else
                        {
                            echo "<script>alert('Not Updated.....plz try again....');</script>";
                        }
                    }
                ?>
<script>
function edit(vid) {
    if (confirm("Are you sure want to Edit ?")) {
        window.location.href = 'editvendorprofile.php?vid=' + vid + '';
        return true;
    }
}
</script>
<?php
    include("fff.php");
?>