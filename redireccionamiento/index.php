<?php require ('../init.php'); ?>
<?php require ('../templates/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redireccionamiento</title>
</head>
<body>
    <?php if (isset($_GET['success'])):?>
    <div class="success">El Post ha sido creado</div>
    <?php endif;?>
</body>
</html>
<?php require ('../templates/footer.php'); ?>