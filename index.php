<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>IA - Desarrollo Web</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
        rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />


</head>

<body>
    <?php
    error_reporting(E_ALL);
    ini_set('disploay_errors', 1);

    setlocale(LC_TIME, 'es', 'spa', 'es_ES');
    date_default_timezone_set('Atlantic/Canary');


    // Declarar variables
    $all_posts = [
        [
            'id' => 1,
            'title' => 'IA y Diseño Web: Creatividad Automatizada',
            'excerpt' => 'Descubre cómo la inteligencia artificial está revolucionando el diseño web, generando contenido dinámico y recomendando diseños personalizados para cada usuario.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae pulvinar turpis. Nam ut
        arcu tellus. Morbi sit amet elit lacinia, tincidunt leo a, posuere mi. Mauris nec odio at quam lacinia consequat.
        Fusce mattis orci ex, eget accumsan neque vehicula et. Vivamus consectetur tempor lacus, in tincidunt massa rutrum ut.
        Pellentesque augue felis, iaculis eu interdum et, semper eu purus. Vestibulum a viverra justo.',
            'published_on' => '2022-01-08 10:15:00',
        ],
        [
            'id' => 2,
            'title' => 'IA y Contenido Dinámico: La Evolución del Web Development',
            'excerpt' => 'Explora cómo la inteligencia artificial está impulsando la generación de contenido dinámico, desde descripciones de productos hasta artículos de blog, en el desarrollo web moderno.',
            'content' => 'Integer placerat hendrerit pharetra. Nunc eget enim vulputate, efficitur dolor pretium, pharetra
        nulla. Proin mattis aliquam sem. Morbi vel mi ac magna consequat tempus vitae eget diam. Aliquam ac sapien a tortor
        rutrum faucibus nec nec urna. Ut et nisl magna. Vivamus elit risus, rhoncus vitae elit suscipit, porta pulvinar justo.
        Aliquam sodales urna eu scelerisque ultrices. Fusce et neque id risus gravida vestibulum a et urna. Curabitur aliquam
        accumsan leo, pharetra tempus velit condimentum et. Donec dapibus faucibus lorem a tincidunt. Donec ultricies id metus
        et aliquam. Vestibulum dapibus magna nec elit ultrices, ornare pretium nisi dictum.',
            'published_on' => '2022-01-08 10:15:00',
        ],
    ];

    $post_1_titulo = "IA y Diseño Web: Creatividad Automatizada";
    $post_1_contenido = "Descubre cómo la inteligencia artificial está revolucionando el diseño web, generando contenido dinámico y recomendando diseños personalizados para cada usuario.";
    $post_2_titulo = "IA y Contenido Dinámico: La Evolución del Web Development";
    $post_2_contenido = "Explora cómo la inteligencia artificial está impulsando la generación de contenido dinámico, desde descripciones de productos hasta artículos de blog, en el desarrollo web moderno.";
    ?>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.php">IA en el Desarrollo Web</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto py-4 py-lg-0">
                    <!--<li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.php">Inicio</a></li>-->
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="#">Herramientas</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="#">Curiosidades</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="#">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('assets/img/header-5.jpg')">
        <div class="container position-relative px-4 px-lg-5 d-flex align-items-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Inteligencia Artificial</h1>
                    <span class="subheading">Aplicada al Desarrollo Web</span>
                </div>
            </div>
        </div>
    </header>


    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <!-- Post Content -->
                <div id="content" class="content">
                    <div class="posts">
                        <?php foreach ( $all_posts as $post ): ?>
                            <article class="post">
                                <header>
                                    <h2 class="post-title">
                                        <?php echo $post['title']; ?>
                                    </h2>
                                </header>
                                <div class="post-content">
                                    <?php echo $post['content']; ?>
                                </div>
                                <footer>
                                </footer>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- Divider-->
                <hr class="my-4" />
                <!-- Formulario -->
                <div class="container">
                    <h2 class="mt-5">Formulario de Envío</h2>
                    <form action="formulario.php" method="POST" class="mt-4">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <!--<div class="mb-3">
                            <label for="email" class="form-label">Correo electrónico:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>-->
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
                <hr class="my-4" />

                <!-- Suma de los 1.000 primeros números -->
                <?php
                $suma = 0;

                for ($i = 1; $i <= 1000; $i++) {
                    $suma += $i;
                }

                echo "La suma de los primeros 1000 números enteros es: $suma";
                ?>

<?php
$suma_pares = 0;
$producto_impares = 1;
$pares_contados = 0;
$impares_contados = 0;

for ($i = 1; $pares_contados < 20 || $impares_contados < 20; $i++) {
    if ($i % 2 == 0 && $pares_contados < 20) {
        $suma_pares += $i;
        $pares_contados++;
    } elseif ($i % 2 != 0 && $impares_contados < 20) {
        $producto_impares *= $i;
        $impares_contados++;
    }
}

echo "La suma de los primeros 20 números pares es: $suma_pares<br>";
echo "El producto de los primeros 20 números impares es: $producto_impares";
?>


                <!-- Pager
                <br>
                <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase"
                        href="#!">Anteriores →</a>
                </div>-->
            </div>
        </div>
    </div>

    <!-- Footer-->
    <footer class="border-top">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item">
                            <a href="#!">
                                <span class="fa-stack fa-lg">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!">
                                <span class="fa-stack fa-lg">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!">
                                <span class="fa-stack fa-lg">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <div class="small text-center text-muted fst-italic">Copyright &copy; Your Website 2023</div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>