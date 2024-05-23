<?php
// Incluye el archivo de cabecera común ubicado en el directorio templates, dos niveles arriba del directorio actual.
require __DIR__ . '/../../templates/header.php';
?>

<!-- Título de la página -->
<h2>Crear nuevo post</h2>

<?php
// Verifica si hay un error en el formulario.
if ($error):
    ?>
    <!-- Muestra un mensaje de error si hay algún problema con el formulario -->
    <div class="error">
        Error en el formulario.
    </div>
<?php
endif; // Fin de la verificación del error.
?>

<!-- Inicio del formulario para crear un nuevo post -->
<form action="" method="post">

    <!-- Campo para el título del post -->
    <label for="title">Título (requerido)</label>
    <input type="text" name="title" id="title" value="<?php
    // Escapa caracteres especiales en el valor del título para prevenir ataques XSS
    echo htmlspecialchars($title, ENT_QUOTES);
    ?>">

    <!-- Campo para el extracto del post -->
    <label for="excerpt">Extracto</label>
    <input type="text" name="excerpt" id="excerpt" value="<?php
    // Escapa caracteres especiales en el valor del extracto para prevenir ataques XSS
    echo htmlspecialchars($excerpt, ENT_QUOTES);
    ?>">

    <!-- Campo para el contenido del post -->
    <label for="content">Contenido (Requerido)</label>
    <textarea name="content" id="content" cols="30" rows="30"><?php
    // Escapa caracteres especiales en el valor del contenido para prevenir ataques XSS
    echo htmlspecialchars($content, ENT_QUOTES);
    ?></textarea>

    <!-- Botón para enviar el formulario -->
    <p>
        <input type="submit" name="submit-new-post" value="Nuevo post">
    </p>
</form>

<?php
// Incluye el archivo de pie de página común ubicado en el directorio templates, dos niveles arriba del directorio actual.
require __DIR__ . '/../../templates/footer.php';
?>