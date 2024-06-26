
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!--<link href="css/styles.css?v=<?php echo time(); ?>" rel="stylesheet" />-->
    <link rel="stylesheet" href="css/styles.css">


</head>

<body>
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

                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="#">Curiosidades</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="contacto.php">Contacto</a></li>
                    <!--<li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="login.php">login</a></li>-->
                    <?php if (isset($_SESSION['username'])): // Verifica si el usuario está logueado ?>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="new-post.php">Muevo Post</a>
                        </li>
                        
                        <!-- Muestra el nombre del usuario -->
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo SITE_URL; ?>/?logout=true">Logout</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo SITE_URL; ?>/admin/index.php">Admin</a></li>
                        <li class="nav-item" ><a class="nav-link px-lg-3 py-3 py-lg-4" >Bienvenido, <?php echo htmlspecialchars($_SESSION['username']); ?>!</a></li>
                        
                        <!-- Opción de logout -->
                    <?php else: // Si el usuario no está logueado ?>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo SITE_URL; ?>/login.php">Login</a></li>
                        
                        <!-- Opción de login -->
                    <?php endif; ?>
                </ul>


            </div>
        </div>
    </nav>
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('assets/img/header-5.jpg'); height: 35rem">
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