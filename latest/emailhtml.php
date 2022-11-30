<?php 

$to = 'kenilbhayani4042@gmail.com'; 
$from = 'totalcarcare5@gmail.com'; 
$fromName = 'SenderName'; 
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 
$subject = "Send HTML Email in PHP by CodexWorld"; 
 
$htmlContent = ' 
    <html> 
    <head> 
        <title>TOTAL CAR CARE</title> 
    </head> 
    <body> 
        <h1>Thanks you for joining with us!</h1> 
        <table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;"> 
            <tr> 
                <th>Name:</th><td>Kenil Bhayani</td> 
            </tr> 
            <tr style="background-color: #e0e0e0;"> 
                <th>Email:</th><td>kenilbhayani4042@gmail.com</td> 
            </tr> 
            <tr> 
                <th>Message:</th>
                <td>
                hello Kenil 
                </td> 
            </tr> 
        </table> 
    </body> 
    </html>'; 
    if(mail($to, $subject, $htmlContent, $headers)){
        echo 'Your mail has been sent successfully.';
    } else{
        echo 'Unable to send email. Please try again.';
    }
    ?>