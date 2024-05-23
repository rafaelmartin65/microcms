<?php 
require ('init.php'); ?> <!-- Incluye el archivo de inicialización -->
<?php if(!is_logged_in()){
    redirect_to('../login.php');
}

$action = isset($_GET['action']) ? $_GET['action'] : '';
?>
<h2>Adminsitración</h2>
<ul>
    <li><a href="?action=list-post">Lista de posts</a></li>
    <li><a href="?action=new-post">Nuevo post</a></li>
</ul>