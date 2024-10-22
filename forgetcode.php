<?php
if(isset($_POST['reset']))
{
    $email=$_POST['email'];
}
else{
    exit();
}
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
                      
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'praje8888@gmail.com';                     //SMTP username
    $mail->Password   = 'tipnbrvtlzxztxny';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('praje8888@gmail.com', 'Admin');
    $mail->addAddress($email);     //Add a recipient
    

  $code = substr(str_shuffle('1234567890ABCDEFGHIJKLMNOPQRS'),0,6);
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Password Reset';
    $mail->Body    = 'Your Password is '.'<b>'.$code.'</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $con = new mysqli("localhost","root","","grs");
    if($con->connect_error){
        die('could not connect to the database.');
    }
    $verifyquery=$con->query("select * from tbl_user where email='$email'");

    if($verifyquery->num_rows){
        $codequery=$con->query("update tbl_user set password='$code' where email='$email'");

       
       
        

    $mail->send();
    echo "<script>alert('Your Password has been changed successfully. Please check your email.'); window.location.href='userlogin.php';</script>";

    }



$con->close();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
