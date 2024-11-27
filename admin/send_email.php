<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer classes
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

include 'includes/session.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $conn = $pdo->open();

    try {
        // Fetch all subscriber emails
        $stmt = $conn->prepare("SELECT email FROM subscriptions");
        $stmt->execute();
        $emails = $stmt->fetchAll(PDO::FETCH_COLUMN);

        // Initialize PHPMailer
        $mail = new PHPMailer(true);

        // Server settings
        $mail->isSMTP();
        $mail->Host = 'mail.coolenterprisesmw.net'; // Replace with your SMTP host
        $mail->SMTPAuth = true;
        $mail->Username = 'josephy@coolenterprisesmw.com'; // Replace with your SMTP username
        $mail->Password = 'ibR39FCb3='; // Replace with your SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 465; // Replace with your SMTP port (usually 587 or 465)

        // Sender info
        $mail->setFrom('josephy@coolenterprisesmw.com', 'https://coolenterprisesmw.com/');

        // Email content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body = $message;

        // Add recipients
        foreach ($emails as $email) {
            $mail->addBCC($email); // Add as BCC to send a single email to all
        }

        // Send the email
        $mail->send();
        $_SESSION['success'] = 'Emails successfully sent to all subscribers!';
    } catch (Exception $e) {
        $_SESSION['error'] = 'Failed to send emails. Error: ' . $mail->ErrorInfo;
    } catch (PDOException $e) {
        $_SESSION['error'] = 'Database error: ' . $e->getMessage();
    }

    $pdo->close();
}

header('location: subscribe.php');
?>
