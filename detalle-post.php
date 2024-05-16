<?php require ('init.php'); ?> <!-- Incluye el archivo de inicialización -->
<?php require ('templates/header.php'); ?>  <!-- Incluye el encabezado de la página -->


<?php
// Si se ha enviado un parámetro 'delete-post' en la URL
if (isset($_GET['delete-post'])) {
    $id = $_GET['delete-post'];  // Obtiene el ID del post a eliminar desde la URL
    delete_post($id);  // Llama a la función delete_post() para eliminar el post
    redirect_to('index.php');  // Redirige al usuario a la página principal
    die();  // Termina la ejecución del script
}

// Declarar variables
$all_posts = get_all_posts();  // Obtiene todos los posts de la base de datos

// Variable para indicar si se ha encontrado el post
$post_found = false;

// Verifica si se ha recibido el parámetro 'view' en la URL
if (isset($_GET['view'])) {
    // Construye la consulta SQL para seleccionar el post con el ID proporcionado
    $query = 'SELECT * FROM posts WHERE ID=' . $_GET['view'];

    // Ejecuta la consulta SQL para obtener todos los posts
    $result = mysqli_query($app_db, 'SELECT * FROM posts');

    // Verifica si la consulta se ejecutó correctamente
    if ($result) {
        // Extrae el primer resultado como un array asociativo
        $post_found = mysqli_fetch_assoc($result);

        // Crea un array que contiene solo el post encontrado
        $all_posts = [$post_found];
    }
}
?>

<div class="posts">
    <?php foreach ($all_posts as $post): ?>
        <article class="post">
            <header>
                <!-- Enlace al post individual -->
                <h2 class="post-title">
                    <a href="?view=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a>
                </h2>
            </header>
            <?php
            // Obtener el título del post
            $titulo_post = $post['title'];

            // nombre imagen sin espacios
            $nombre_img = $id . '.jpg'; ?>

            <div class="post-content">
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?php echo 'assets/img/' . $nombre_img; ?>" alt="Imagen de ejemplo"
                            class="post-image img-fluid">
                    </div>
                    <div class="col-md-6">

                        <?php echo $post['excerpt']; ?>
                    </div>
                </div>
                <br>
                <?php
                // Construye nombre del archivo con el id del post para crear la pagina de detalle
                $nombre_archivo = 'detalle-post.php'; ?>
                <div class="d-flex justify-content-between mb-4">
                    <div class="m-0">
                        <!-- Published date -->
                        <?php $fecha_formateada = date("d-m-Y", strtotime($post['published_on']));
                        echo "<p class='m-0'>Publicado el " . $fecha_formateada . "</p>"; ?>
                    </div>
                    <a class="btn btn-sm custom-color rounded-pill text-uppercase"
                        href="<?php echo $nombre_archivo; ?>">leer
                        más... →</a>
                </div>
                <hr class="my-4">
        </article>
    <?php endforeach; ?>
</div>
<?php require ('templates/footer.php'); ?>  <!-- Incluye el pie de página -->