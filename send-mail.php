<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    $to = "rmartin65@gmail.com"; // Cambia esto a tu dirección de correo
    $subject = "Contacto desde formulario";
    $body = "Nombre: $name\nEmail: $email\nTeléfono: $phone\nMensaje:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>
        var successMessage = document.getElementById('submitSuccessMessage');
        if (successMessage) {
            successMessage.style.display = 'block';
        } else {
            console.error('No se pudo encontrar el elemento submitSuccessMessage');
        }
        </script>";
    } else {
        echo "<script>
        var errorMessage = document.getElementById('submitErrorMessage');
        if (errorMessage) {
            errorMessage.style.display = 'block';
        } else {
            console.error('No se pudo encontrar el elemento submitErrorMessage');
        }
        </script>";
    }
}
header("Location: index.php"); // Redirecciona al usuario a la página principal
exit(); // Asegura que el script se detenga después de redirigir
