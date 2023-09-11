 <?php
date_default_timezone_set("Asia/Kolkata");
include("connection.php");

$name = trim(isset($_POST['name'])) ? $_POST['name'] : null;
$email = trim(isset($_POST['email'])) ? $_POST['email'] : null;
$subject = trim(isset($_POST['subject'])) ? $_POST['subject'] : null;
$mobile = trim(isset($_POST['mobile'])) ? $_POST['mobile'] : null;
$message = trim(isset($_POST['message'])) ? $_POST['message'] : null;
$homepage = trim(isset($_POST['homepage'])) ? $_POST['homepage'] : null;
$contactpage = trim(isset($_POST['contactpage'])) ? $_POST['contactpage'] : null;



$table = "<table width='100%' border='1'>";
    $table .="<tr><th>Name</th>";
    $table .="<th>Email</th>";
    $table .="<th>Mobile</th>";
    $table .="<th>Message</th>";
   
    $table .="</tr>";
    $table .="<tr><td>$name</td>";
    $table .="<td>$email</td>";
    $table .="<td>$mobile</td>";
    $table .="<td>$message</td>";
    
    $table .="</tr></table>";
    
   
    
   
include("mailer/mailer/Exception.php");
include("mailer/mailer/SMTP.php");
include("mailer/mailer/PHPMailer.php");


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


$mail = new PHPMailer();

$mail->Host = "Localhost";
$mail->SMTPAuth = false;
$mail->Username = "info@fluidsealsindia.com";
$mail->Password = "Uo+Pn!5GUu?s";
$mail->SMTPSecure = "tls";
$mail->Port = 25;

$mail->setFrom("salehashaikh1449@gmail.com", "Maid Solution");
$mail->addAddress("salehashaikh1449@gmail.com", "24x7 Maid Solutions");
$mail->isHTMl(true);
$mail->Subject = "$homepage.$contactpage";
$mail->Body = $table;

if(!$mail->send()){
	$mail_response = "1";
}else{
    $mail_response = "0";
}

echo $mail_response;


?> 