<?php
require __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


if (isset($_POST['send'])) {

    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $product_name   = htmlspecialchars($_POST['product_name']);
    $message = nl2br(htmlspecialchars($_POST['message']));


    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'akshayparmar7577@gmail.com'; 
        $mail->Password   = 'gzth aekm cciz rzcu';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Email settings
        $mail->setFrom('akshayparmar7577@gmail.com', 'jyoti');
        $mail->addAddress('akshayparmar7577@gmail.com');

        $mail->AddEmbeddedImage('img/jyoti_logo.png', 'logo_cid');

        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Message - ' . $product_name;
        $mail->Body = '
            <h3><strong>'.$product_name.'</strong></h3>
            <p>You have received a new message from your website contact form:</p>
            <p><strong>Name:</strong> '.$name.'</p>
            <p><strong>Email:</strong> '.$email.'</p>
            <p><strong>Message:</strong> '.$message.'</p>
            <img src="cid:logo_cid" width="150">
        ';
        $mail->send();
        header("Location: index.php");
        exit;
    } catch (Exception $e) {
        echo "Mail Error: {$mail->ErrorInfo}";
    }
}
?>
