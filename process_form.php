<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $whatsapp = $_POST["whatsapp"];
    $email = $_POST["email"];

    // Set recipient email address
    $to = "your_email@example.com";

    // Set email subject
    $subject = "Se recibió un correo en Visciano México";

    // Compose the email message
    $message = "Nombre: $name\n";
    $message .= "WhatsApp: $whatsapp\n";
    $message .= "Correo: $email\n";

    // Additional headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        header('Location: thanks.html');
    } else {
        header('Location: error.html');
    }
} else {
    echo "No se ha recibido información";
}
?>
