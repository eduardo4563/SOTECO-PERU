<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre  = htmlspecialchars(strip_tags($_POST['nombre']));
    $email   = filter_var($_POST['correo'], FILTER_SANITIZE_EMAIL);
    $mensaje = htmlspecialchars(strip_tags($_POST['mensaje']));

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host       = 'sotecoperu.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'contacto@sotecoperu.com';
            $mail->Password   = '20523613970Kl@';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;

            $mail->setFrom('contacto@sotecoperu.com', 'SOTECO PERÚ');
            $mail->addAddress('contacto@sotecoperu.com', 'SOTECO PERÚ');
            $mail->addReplyTo($email, $nombre);

            $mail->isHTML(true);
            $mail->Subject = "Mensaje de Contacto de $nombre";
            $mail->Body    = "
                <h3>Nuevo mensaje desde el formulario de contacto</h3>
                <p><b>Nombre:</b> $nombre</p>
                <p><b>Email:</b> $email</p>
                <p><b>Mensaje:</b><br>$mensaje</p>
            ";

            $mail->send();
            echo json_encode(["status" => "success", "title" => "¡Mensaje enviado!", "message" => "Tu mensaje ha sido enviado con éxito."]);
        } catch (Exception $e) {
            echo json_encode(["status" => "error", "title" => "Error al enviar", "message" => "Ocurrió un problema: ".$mail->ErrorInfo]);
        }
    } else {
        echo json_encode(["status" => "warning", "title" => "Correo inválido", "message" => "Por favor ingresa un correo electrónico válido."]);
    }
}
