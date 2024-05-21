<?php
require ('init.php'); // Incluye el archivo de inicialización
require ('templates/header.php'); // Incluye el encabezado de la página

// Verifica si se ha pasado el parámetro 'id' en la URL
if (isset($_GET['id'])) {
    // Valida y sanea el ID para asegurarse de que sea un número entero
    $id = filter_var($_GET['id'], FILTER_VALIDATE_INT);
    if ($id === false) {
        die('ID inválido.');
    }

    // Construye la consulta SQL para seleccionar el post con el ID proporcionado
    $query = 'SELECT * FROM posts WHERE id=' . $id;
    $result = mysqli_query($app_db, $query);

    // Verifica si la consulta se ejecutó correctamente
    if ($result && mysqli_num_rows($result) > 0) {
        // Extrae el resultado como un array asociativo
        $post = mysqli_fetch_assoc($result);
    } else {
        die('Post no encontrado.');
    }
} else {
    die('ID del post no proporcionado.');
}
?>

<div class="container ">
    <div class="row justify-content-center">
        <div class="col-12">
            <!-- Imagen del post -->
            <?php
            $nombre_img = $post['id'] . '.jpg';
            echo '<img src="assets/img/' . $nombre_img . '" alt="Imagen de ejemplo" class="img-fluid mb-4">';
            ?>
            <!-- Título del post -->
            <header>
                <h3 class="post-title"><?php echo htmlspecialchars($post['title']); ?></h3>
            </header>
            <!-- Excerpt del post -->
            <div class="post-excerpt mb-4 fs-5">
                <?php echo htmlspecialchars($post['excerpt']); ?>
            </div>
            <!-- Contenido del post -->
            <div class="post-content mb-4 fs-5">
                <?php echo $post['content']; ?>
            </div>
            <!-- Fecha de publicación del post -->
            <div class="post-date mb-4 fs-6">
                <?php
                $fecha_formateada = date("d-m-Y", strtotime($post['published_on']));
                echo "<p>Publicado el " . $fecha_formateada . "</p>";
                ?>
            </div>
            <!-- Botón para volver a index.php -->
            <div class="text-end">
                <a href="index.php" class="btn btn-primary btn-sm fs-6">Volver</a>
            </div>
        </div>
    </div>
</div>

<?php require ('templates/footer.php'); // Incluye el pie de página ?>