<?php require ('../init.php');  // Incluye el archivo de inicialización -->

if (!is_logged_in()) {
    redirect_to('../login.php'); 
}

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
    case 'new-post': {
        $error = false;
        $title = '';
        $excerpt = '';
        $content = '';

        if (isset($_POST['submit-new-post'])) {
            $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
            $excerpt = filter_input(INPUT_POST, 'excerpt', FILTER_SANITIZE_STRING);
            $content = strip_tags($_POST['content'], '<br><p><a><img><div>');
            if (empty($title) || empty($excerpt) || empty($content)) {
                $error = true;
            } else {
                insert_post((int) $id, $title, $excerpt);
                redirect_to('admin?action=list-posts&sucess=true');
            }
        }
        require 'templates/new-post.php';

        break;
    }
    case 'list-post': {
        //empezamos por aqui
        //Una estructura muy similar a index.php de proyecto, por que me tengo que llevar de ahi, todo el codigo que afecta
        //a borrado de ENTRADAS (recuerda el usuario general no debe acceder a poder borrar un post, NUNCA)
        if (isset($_GET['delete-post'])) {
            $id = $_GET['delete_post()'];
            if (!check_hash('delete-post-' . $id, $_GET['hash'])) {
                die('hackeando no?');
            }
            delete_post($id);
            redirect_to('admin?action-list-posts');
            die();
        }
        $all_posts = get_all_posts();
        require ('tenplates/list-posts.php');
        break;
    }
    default:{
        require 'templates/admin.php';
    }
}

