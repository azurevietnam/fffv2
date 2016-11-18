<?php
require_once('./class.phpmailer.php');
require_once('./class.smtp.php');
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Host = "in-v3.mailjet.com";
$mail->Port = 587;
$mail->Username = "6d733c3d4223e7bb5967378b7bc07f6c";
$mail->Password = "c0d05f3bc798e9ed0051d30a88216bc4";
$mail->SetFrom('chanclickao@fff.com.vn', 'Chặn click ảo');
$mail->Subject = "A Transactional Email From Web App";
$body = "AAAAAAAAAAAAAAAA";
$mail->MsgHTML($body);
$mail->addAddress('namle.wizard@gmail.com', 'John Doe');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
?>