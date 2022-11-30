<?php 
include("connect.php");
$car_id=$_GET["car_id"];

$result=mysqli_query($con,"select * from car_master where car_id=$car_id");
while($row=mysqli_fetch_row($result)) 
{
//$state=$row[1];
echo "<option value=$row[0]>$row[3]</option>";
}
?>