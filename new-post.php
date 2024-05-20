<?php require ('init.php'); ?> <!-- Incluye el archivo init.php que inicializa la aplicación -->
<?php require ('templates/header.php'); ?> <!-- Incluye el encabezado de la página -->

<?php

// Variables para controlar el estado del formulario
$error = false;
$title = '';
$excerpt = '';
$content = '';


// Verifica si se ha enviado el formulario
if (isset($_POST['submit-new-post'])) {
	// Se ha enviado el formulario, entonces recopila los datos enviados
	$title = $_POST['title'];
	$excerpt = $_POST['excerpt'];
	$content = $_POST['content'];

	// Verifica si el título y el contenido no están vacíos
	if (empty($title) || empty($content) || empty($excerpt)) {
		// Si alguno de los campos está vacío, establece $error en true
		$error = true;
	} else {

		insert_post($title, $excerpt, $content);
		redirect_to('index.php?success=true');
		die();
	}
}
?>

<h2 class="text-center mb-4">Nuevo Post</h2>

<!-- Si hay un error, muestra un mensaje de error -->
<?php if ($error): ?>
	<div class="error">Error en el formulario, revise los campos rellenados</div>
<?php endif; ?>

<!-- Formulario para crear un nuevo post -->
<form class="container mt-4" method="post" action="">
	<div class="form-group mb-2">
		<label for="title" class="small">Título:</label><br>
		<input type="text" class="form-control form-control-sm border border-dark rounded" id="title" name="title"
			required value="<?php echo htmlspecialchars($title, ENT_QUOTES); ?>">
	</div>

	<div class="form-group mb-2">
		<label for="excerpt" class="small">Extracto:</label><br>
		<textarea class="form-control border border-dark rounded" id="excerpt" name="excerpt" rows="2"
			cols="50"><?php echo htmlspecialchars($content, ENT_QUOTES, 'UTF-8'); ?></textarea>
	</div>

	<div class="form-group mb-2">
		<label for="content" class="small">Contenido:</label><br>
		<textarea class="form-control border border-dark rounded" id="content" name="content" rows="4"
			cols="50"><?php echo htmlspecialchars($excerpt, ENT_QUOTES, 'UTF-8'); ?></textarea>
	</div>
	<div class="d-flex justify-content-end"> <!-- Utilizando flexbox para alinear el botón a la derecha -->
		<input class="btn btn-primary btn-sm rounded " type="submit" name="submit-new-post" value="Nuevo Post">
	</div>
</form>


<?php require ('templates/footer.php'); ?> <!-- Incluye el pie de página -->