<?php require ('config.php'); ?> <!-- Incluye el archivo de configuración -->
<?php require ('init.php'); ?> <!-- Incluye el archivo de inicialización -->
<?php require ('templates/header.php'); ?> <!-- Incluye el encabezado de la página -->

<?php


// Verifica si ya hay una sesión activa, en cuyo caso redirige al index.php
if (isset($_SESSION['username'])) {
    header('Location: index.php');
    exit;
}

// Define una variable para almacenar mensajes de error
$error = '';

// Verifica si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo $_POST['username'];
    // Verifica si los campos de usuario y contraseña están establecidos
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Validar las credenciales. Aquí se hace de manera estática para simplificar.
        if ($username === 'rafael' && $password === '1234') { // Verifica las credenciales
            $_SESSION['username'] = $username; // Establece la sesión del usuario
            header('Location: index.php'); // Redirige a la página principal
            exit;
        } else {
            $error = 'Nombre de usuario o contraseña incorrectos'; // Mensaje de error
        }
    } else {
        $error = 'Por favor, complete ambos campos'; // Mensaje de error si faltan campos
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <?php if ($error): // Muestra un mensaje de error si hay uno ?>
        <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
    <?php endif; ?>
    <form class="form-inline" method="post" action="login.php">
        <div class="form-group mx-sm-3 mb-2">
            <label for="username" class="sr-only">Nombre usuario</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="usuario">
        </div>
        <div class="form-group mx-sm-3 mb-2">
            <label for="password" class="sr-only">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
        </div>
        <button type="submit" class="btn btn-primary mb-2 btn-sm">Inicio sesión</button>
    </form>


</body>



</html>
<?php require ('templates/footer.php'); ?> <!-- Incluye el pie de página -->