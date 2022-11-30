<?php
$to="pnidhic36@gmail.com";
$subject="Simple Email Test via PHP";
$body="Hello , How are You !!";
$headers="From: totalcarcare5@gmail.com";

if(mail($to,$subject,$body,$headers))
{
    echo "Email successfully sent";
}
else
{
    echo "Email sending faild...";
}
?>



