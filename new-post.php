<?php require ('init.php'); ?>
<?php require ('templates/header.php'); ?>

<h2 class="text-center mb-4">Nuevo Post</h2>

<form method="post" action="guardar_post.php">
    <label for="title">Título:</label><br>
    <input type="text" id="title" name="title" required><br><br>

    <label for="excerpt">Extracto:</label><br>
    <textarea id="excerpt" name="excerpt" rows="4" cols="50"></textarea><br><br>

    <label for="content">Contenido:</label><br>
    <textarea id="content" name="content" rows="8" cols="50"></textarea><br><br>

    <input type="submit" value="Guardar">
</form>
<?php require ('templates/footer.php'); ?>