<?php
    $sender = NULL;
    $message = NULL;
    if (isset($_POST) && count($_POST)) {
        $sender = $_POST["name"]." | ".$_POST["mail"];
        $message = $_POST["message"];
    }

    // Connect to PHPMailer
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require_once 'PHPMailer-master/src/Exception.php';
    require_once 'PHPMailer-master/src/PHPMailer.php';

    try {
        $mail = new PHPMailer();

        // User information
        $mail->Username = 'bot@server266947.nazwa.pl';
        $mail->Password = 'Waither132457689';

        // Sender information
        $mail->CharSet = 'UTF-8';
        $mail->Sender = 'bot@server266947.nazwa.pl';
        $mail->setFrom('notifications-noreplay@femstruct.pl','FEMstruct.pl',FALSE);
        $mail->AddReplyTo(null);

        // Adding emails
        // $mail->addAddress("biuro@femstruct.pl");
        $mail->addAddress("maciek550@interia.eu");
        
        // Adding content
        $mail->isHTML(true);

        // Get body of mail
        $body = file_get_contents('mail.html');
        $mail->Subject = "Nowa wiadomość ze strony!";
        $text = "Nowa wiadomość ze strony FEMstruct<br>Nadawca: $sender<br>Wiadomość: <br> $message";

        // Replace text
        $body = str_replace('%text%',$text, $body);
        $mail->AddEmbeddedImage('../../images/logo/logoBlack.svg', 'logoimg');

        // Add image and prepared mail
        $mail->AddEmbeddedImage("D:\Adfors Gorlice\src\images\logo\logo_Adfors.png", 'logoimg');
        $mail->msgHTML($body);

        // Sending mail
        if ($mail->send()) {
            echo "[OK] Wysłano<br>";
        }
        else {
            echo "[ERROR] Błąd wysyłania: {$mail->ErrorInfo}";
        }
    }
    catch (Exception $e) {
        echo "[ERROR] Błąd wysyłania: {$mail->ErrorInfo}";
    }
?>