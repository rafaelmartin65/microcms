<?php require ('init.php'); ?> <!-- Incluye el archivo init.php que inicializa la aplicación -->
<?php require ('templates/header.php'); ?> <!-- Incluye el encabezado de la página -->

<?php

// Variables para controlar el estado del formulario
$error = false;
$title = '';
$excerpt = '';
$content = '';


// Verifica si se ha enviado el formulario
if ( isset( $_POST['submit-new-post'] ) ) {
	// Se ha enviado el formulario, entonces recopila los datos enviados
	$title = $_POST['title'];
	$excerpt = $_POST['excerpt'];
	$content = $_POST['content'];

	// Verifica si el título y el contenido no están vacíos
	if ( empty( $title ) || empty( $content ) ) {
		// Si alguno de los campos está vacío, establece $error en true
		$error = true;
	}
	else {

        insert_post( $title, $excerpt, $content );
		// Si no hay errores, prepara un nuevo post con los datos recibidos
		//$new_post = [
		//	'id' => 0,
		//	'title' => $title,
		//	'excerpt' => $excerpt,
		//	'content' => $content,
		//	'published_on' => date( 'Y-m-d H:i:s' ) // Establece la fecha y hora actual
		//];

        //$query = "INSERT INTO posts(title, excerpt, content, published_on) 
        //VALUES('$title','$excerpt','$content','$published_on')";
		// Finaliza la ejecución del script (esto es solo para fines de demostración)
		//die( 'Formulario enviado' );
	}
}
?>

<h2 class="text-center mb-4">Nuevo Post</h2>

<!-- Si hay un error, muestra un mensaje de error -->
<?php if ($error): ?>  
<div class="error">Error en el formulario, revise los campos rellenados</div>
<?php endif; ?>

<!-- Formulario para crear un nuevo post -->
<form method="post" action="">
    <label for="title">Título:</label><br>
    <input type="text" id="title" name="title" required><br><br>

    <label for="excerpt">Extracto:</label><br>
    <textarea id="excerpt" name="excerpt" rows="4" cols="50"></textarea><br><br>

    <label for="content">Contenido:</label><br>
    <textarea id="content" name="content" rows="8" cols="50"></textarea><br><br>

    <input type="submit" name="submit-new-post" value="Nuevo post">
</form>

<?php require ('templates/footer.php'); ?> <!-- Incluye el pie de página -->
