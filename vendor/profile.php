<?php
    include("hhh.php");
    error_reporting(1);
	session_start();
?>


<body class="no-skin">
    <form>

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
                                    <div class="profile-info-name"> Vendor Name :- </div>

                                    <div class="profile-info-value">
                                        <span><?php echo $_SESSION['vname'];?></span>
                                    </div>
                                </div>

                                <div class="profile-info-row">
                                    <div class="profile-info-name">Phone :-</div>

                                    <div class="profile-info-value">
                                        <i class="fa fa-phone light-orange bigger-110"></i>
                                        <span><?php echo $_SESSION['ph'];?></span>
                                    </div>
                                </div>

                                <div class="profile-info-row">
                                    <div class="profile-info-name">Email :-</div>

                                    <div class="profile-info-value">
                                        <span><?php echo $_SESSION['em'];?></span>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <a onclick="edit(<?php echo $row[0];?>)">

                                            <button class="btn btn-info" name="edit">
                                                Edit</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /#home -->

                <!-- <div id="edit-password" class="tab-pane ">
                    <div class="row">
                        <div class="col-xs-12 col-sm-9">
                            <div class="space-10"></div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-pass1">Old
                                    Password</label>

                                <div class="col-sm-9">
                                    <input type="password" name="oldpassword" id="form-field-pass1" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-pass1">New
                                    Password</label>

                                <div class="col-sm-9">
                                    <input type="password" name="password" id="form-field-pass1" />
                                </div>
                            </div>

                            <div class="space-4"></div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-pass2">Confirm
                                    Password</label>

                                <div class="col-sm-9">
                                    <input type="password" name="conpassword" id="form-field-pass2" />
                                </div>
                            </div>

                        </div><br><br><br><br><br>

                        <div class="clearfix form-actions">
                            <div class="col-md-offset-3 col-md-9">
                                <input type="submit" name="submit" id="submit" class="btn btn-info">
                                &nbsp; &nbsp;
                                <button class="btn" type="reset">
                                    <i class="ace-icon fa fa-undo bigger-110"></i>
                                    Reset
                                </button>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <!--edit-->


        </div>

    </form>
</body>

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