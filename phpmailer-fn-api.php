<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//$web_dir="my_sites/sps/csm/";
//$app_path="http://" . $_SERVER['HTTP_HOST'] . "/" . $web_dir;
//$root_path=$_SERVER['DOCUMENT_ROOT'] . "/" . $web_dir;

require 'PHPMailer-6.8.0/src/Exception.php';
require 'PHPMailer-6.8.0/src/PHPMailer.php';
require 'PHPMailer-6.8.0/src/SMTP.php';

//Load composer's autoloader
//require 'vendor/autoload.php';

function send_mail($to,$str_cc,$str_bcc,$subject,$body,$from_addr,$from_name,$from_password)
{

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    //$mail->SMTPDebug = 2;                               
    $mail->isSMTP();                                      
    $mail->Host = 'smtp.padutchbaskets.com';  
    //$mail->Host = 'smtp.gmail.com';  
    $mail->SMTPAuth = true;                              
    $mail->Username = $from_addr;                 
    $mail->Password = $from_password;                          
    $mail->SMTPSecure = 'tls';                            
    $mail->Port = 465;                          
    //$mail->Port = 587;
    $mail->isHTML(true);
    
    //Recipients
    $mail->setFrom($from_addr, 'padutchbaskets');
    $mail->addAddress($to);     // Add a recipient
	//$mail->addAddress('adnan.rasheed@seecs.edu.pk', 'Adnan SEECS');     // Add a recipient
   // $mail->addAddress('adnan.rasheed@outlook.com');               // Name is optional
	//$mail->addAddress('adnan.rasheed@spsnet.com');               // Name is optional

	$mail->addReplyTo($from_addr, $from_name);

	
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $body;
    $mail->AltBody = $body;

    $mail->send();
    //echo 'Message has been sent';
	return "sent";
} catch (Exception $e) {
    //echo 'Message could not be sent.';
    //echo 'Mailer Error: ' . $mail->ErrorInfo;
	return "failed";
}

}

?>
