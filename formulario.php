<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    // Aquí tratar los datos recibidos
    // Por ejemplo, guardarlos en una base de datos o enviarlos por correo electrónico

    // Aquí se muestran por pantalla
    echo "<h2>Datos recibidos:</h2>";
    echo "<p>Nombre: $nombre</p>";
    echo "<p>Correo electrónico: $email</p>";
} else {
    // Si alguien intenta acceder directamente a este script, redirigirlo al formulario
    header("Location: formulario.html");
    exit;
}
