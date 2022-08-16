<?php

include("connection.php");
include("function.php");

?>

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';


$mail=new PHPMailer(true);
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'ecommerce19168@gmail.com';                     //SMTP username
$mail->Password   = 'btqvcjanxmpptjzk';                               //SMTP password
$mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
$mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

//Recipients
$mail->setFrom("ecommerce19168@gmail.com");
$sql = "select * from users";
$res = mysqli_query($con,$sql);
if(mysqli_num_rows($res)>0){

    $mail->addReplyTo("ecommerce19168@gmail.com");

    while($x=mysqli_fetch_assoc($res)){
        $mail->addAddress($x['user_email']);
    }
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $_POST['subject'];
    $mail->Body    = $_POST['body'];

    if($mail->send()){
        echo '<script>alert("Mail has been sent to all the customers")</script>';
        echo '<script>window.location="userMail.php"</script>';
    }else{
        echo '<script>alert("Mail cannot be sent at the moment. Please try again!!")</script>';
        echo '<script>window.location="userMail.php"</script>';
    }

}else{
    echo '<script>alert("Customers are not found to sent the email!!")</script>';
    echo '<script>window.location="userMail.php"</script>';
}

?>