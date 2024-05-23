<?php 
require ('init.php'); ?> <!-- Incluye el archivo de inicialización -->
<?php if(!is_logged_in()){
    redirect_to('../login.php');
}

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
    case 'new-post':{
        break;
    }
    case 'list-post':{
        //empezamos por aqui
        //Una estructura muy similar a index.php de proyecto, por que me tengo que llevar de ahi, todo el codigo que afecta
        //a borrado de ENTRADAS (recuerda el usuario general no debe acceder a poder borrar un post, NUNCA)
        if(isset($_GET['delete-post'])) {
            $id = $_GET['delete_post()'];
            if(! check_hash('delete-post-'. $id, $_GET['hash'])) {
                die('hackeando no?');
            }
            delete_post($id);
            redirect_to('admin?action-list-posts');
            die();
    }
    $all_posts = get_all_posts() ;
    require ('tenplates/list-posts.php');
    break;}
}

?>
<h2>Adminsitración</h2>
<ul>
    <li><a href="?action=list-post">Lista de posts</a></li>
    <li><a href="?action=new-post">Nuevo post</a></li>
</ul>