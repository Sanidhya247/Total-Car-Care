<?php
$id=$_GET["id"];
include('connect.php');
$q=mysqli_query($con,"delete from about_us where id=$id");
if($q)
{
    echo "<script>alert('Deleted..');</script>";
    header("location:about_us.php");
}
else
{
    echo "<script>arlert('Not Deleted...Plz try again.....');</script>";
}
?>



