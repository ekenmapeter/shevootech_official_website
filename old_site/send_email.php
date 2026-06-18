<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// Load Composer's autoloader
require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // =================================================================
    // 1. EMAIL CREDENTIALS (CONFIGURATION)
    // =================================================================
    // ENTER YOUR EMAIL CREDENTIALS HERE
    $smtp_host = 'smtp.gmail.com';          // Set the SMTP server to send through (e.g. smtp.gmail.com for Gmail)
    $smtp_username = 'shevootech@gmail.com'; // SMTP username (your full email address)
    $smtp_password = 'SHEVOOTECH';    // SMTP password (For Gmail, use an "App Password", not your main password)
    $smtp_port = 587;                       // TCP port to connect to (587 for TLS, 465 for SSL)
    $smtp_secure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption
    
    // RECIPIENTS
    $from_email = 'shevootech@gmail.com';   // This should match your SMTP username usually
    $from_name = 'Shevootech Website';
    
    // Add recipients here
    $recipients = [
        'info@shevootech.com.ng',
        'shevootech@gmail.com'
    ];
    // =================================================================

    // Sanitize Inputs
    // Sanitize Inputs
    $name = htmlspecialchars(strip_tags($_POST['name']));
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $goal = htmlspecialchars(strip_tags($_POST['goal']));
    $budget = htmlspecialchars(strip_tags($_POST['budget']));
    $timeline = htmlspecialchars(strip_tags($_POST['timeline']));
    $message = htmlspecialchars(strip_tags($_POST['message']));

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;  // Enable verbose debug output (Uncomment for debugging)
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = $smtp_host;                             // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = $smtp_username;                         // SMTP username
        $mail->Password   = $smtp_password;                         // SMTP password
        $mail->SMTPSecure = $smtp_secure;                           // Enable implicit TLS encryption
        $mail->Port       = $smtp_port;                             // TCP port to connect to

        //Recipients
        $mail->setFrom($from_email, $from_name);
        
        // Add all recipients
        foreach ($recipients as $recipient) {
            $mail->addAddress($recipient);
        }
        
        $mail->addReplyTo($email, $name); // User's email as reply-to

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'New Discovery Quote Request from ' . $name;
        
        // Email Body
        $email_content = "
        <html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                .container { max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px; }
                h2 { color: #4f46e5; border-bottom: 2px solid #4f46e5; padding-bottom: 10px; }
                .info-group { margin-bottom: 15px; }
                .label { font-weight: bold; color: #555; }
                .value { margin-top: 5px; }
                .footer { margin-top: 30px; font-size: 0.9em; color: #777; border-top: 1px solid #eee; padding-top: 10px; }
            </style>
        </head>
        <body>
            <div class='container'>
                <h2>New Quote Request</h2>
                <div class='info-group'>
                    <div class='label'>Name:</div>
                    <div class='value'>$name</div>
                </div>
                <div class='info-group'>
                    <div class='label'>Email:</div>
                    <div class='value'>$email</div>
                </div>
                
                <hr style='border: 0; border-top: 1px solid #eee; margin: 20px 0;'>
                
                <div class='info-group'>
                    <div class='label'>Primary Goal:</div>
                    <div class='value'>$goal</div>
                </div>
                <div class='info-group'>
                    <div class='label'>Estimated Budget:</div>
                    <div class='value'>$budget</div>
                </div>
                <div class='info-group'>
                    <div class='label'>Launch Timeline:</div>
                    <div class='value'>$timeline</div>
                </div>
                
                <hr style='border: 0; border-top: 1px solid #eee; margin: 20px 0;'>
                
                <div class='info-group'>
                    <div class='label'>Additional Details:</div>
                    <div class='value'>$message</div>
                </div>
                
                <div class='footer'>
                    Sent from Shevootech Website via PHPMailer.
                </div>
            </div>
        </body>
        </html>
        ";
        
        $mail->Body    = $email_content;
        $mail->AltBody = "Name: $name\nEmail: $email\nGoal: $goal\nBudget: $budget\nTimeline: $timeline\nMessage: $message";

        if ($mail->send()) {
            echo json_encode(['status' => 'success', 'message' => 'Thank you! Your quote request has been sent successfully. We will get back to you shortly.']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Message could not be sent.']);
        }
        
    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'message' => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
    exit;
}
?>
