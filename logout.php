<?php
session_start(); // Inicia la sesión o reanuda la sesión existente

// Destruye la sesión
session_unset(); // Elimina todas las variables de sesión
session_destroy(); // Destruye la sesión

// Redirige a la página principal
header('Location: index.php');
exit;

