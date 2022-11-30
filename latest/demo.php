<?php
session_start();
include("h1.php");
?>
<?php 
if(isset($_POST['submit']))
    {
        echo "<script>alert('hiii');</script>";
    }
    ?>
<form method=post>
    <input type=submit name="submit" value="submit">
</form>
<?php

// include("f1.php");
?>