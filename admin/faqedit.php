<?php
include('hhh.php');
error_reporting(1);
?>
<?php
$id= $_GET["id"];
$con=mysqli_connect("localhost","root","","tcc");


$q=mysqli_query($con,"select * from faqs where id=$id");
$row=mysqli_fetch_array($q);
?>
<form class="form-horizontal" role="form" method=post>
	<div align=center>
		<h2 align=center><b> FREQUENTLY ASKED QUESTION </b></h2>
		
		<br>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="text-align: left;"> Question </label>
			<div class="col-sm-9">
				<input type="text" name="question" id="question" value="<?php echo $row['question'];?>" class="col-xs-10 col-sm-5" />
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="text-align: left;"> Answer </label>
			<div class="col-sm-9">
				<input type="text" name="answer" id="answer" value="<?php echo $row['answer'];?>" class="col-xs-10 col-sm-5" />
			</div>
		</div>
		<br>
		<div class="clearfix form-actions">
			<div class="col-md-offset-3 col-md-9">
			<input type="submit"  name="submit" id="submit" class="btn btn-primary mr-2">
				&nbsp;
				<button class="btn btn-dark">Reset</button>
			</div>
		</div>
	</div>
</form>
<?php 
 if(isset($_POST['submit']))
 {
    $question=$_POST['question'];
    $answer=$_POST['answer'];
	
	$q=mysqli_query($con,"update faqs set question='$question',answer='$answer' where id=$id");
	$row=mysqli_fetch_array($q);

	if($q){
		echo "<script>alert('Updated......');</script>";
        // header("location:faq.php");
		echo "<script>window.location.assign('faq.php'); </script>";
	}
	else{
        echo"not updatedd..";
    }
 }
?>
	
	
<?php
include('fff.php');
?>