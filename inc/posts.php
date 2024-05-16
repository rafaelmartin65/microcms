<?php

/**
 * Devuelve todo el listado de posts desde la base de datos
 */
function get_all_posts()
{
    global $app_db;

    // Ejecuta una consulta SQL para seleccionar todos los posts
    $result = mysqli_query($app_db, "SELECT * FROM posts");

    // Verifica si la consulta se ejecutó correctamente
    if (!$result) {
        // Si hay un error en la consulta, termina el script y muestra el mensaje de error
        die(mysqli_error($app_db));
    }

    // Devuelve todos los posts como un array asociativo
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

/**
 * Inserta una nueva tarea
 *
 * @param $title
 * @param $excerpt
 * @param $content
 */
function insert_post($title, $excerpt, $content)
{
    global $app_db;

    // Escapa las variables para prevenir inyección SQL
    $title = mysqli_real_escape_string($app_db, $title);
    $excerpt = mysqli_real_escape_string($app_db, $excerpt);
    $content = mysqli_real_escape_string($app_db, $content);

    // Obtiene la fecha y hora actual
    $published_on = date('Y-m-d H:m:s');

    // Construye la consulta SQL para insertar el nuevo post
    $query = "INSERT INTO posts
        ( title, excerpt, content, published_on )
        VALUES
        ( '$title', '$excerpt', '$content', '$published_on' )";

    // Ejecuta la consulta SQL
    $result = mysqli_query($app_db, $query);

    // Verifica si la consulta se ejecutó correctamente
    if (!$result) {
        // Si hay un error en la consulta, termina el script y muestra el mensaje de error
        die(mysqli_error($app_db));
    }
}

/**
 * Busca y devuelve un sólo post
 * Si no lo encuentra, devuelve false
 * @param $post_id
 */
function get_post($post_id)
{
    global $app_db;

    // Construye la consulta SQL para seleccionar el post con el ID proporcionado
    $query = "SELECT * FROM posts WHERE id = $post_id";

    // Ejecuta la consulta SQL
    $result = mysqli_query($app_db, $query);

    // Verifica si la consulta se ejecutó correctamente
    if (!$result) {
        // Si hay un error en la consulta, termina el script y muestra el mensaje de error
        die(mysqli_error($app_db));
    }

    // Devuelve el resultado como un array asociativo
    return mysqli_fetch_assoc($result);
}

/**
 * Elimina un post
 *
 * @param $id
 */
function delete_post( $id ) {
	global $app_db;

	// Convierte el ID a un entero para evitar inyección SQL
	$id = intval($id);

    // Verifica si la consulta se ejecutó correctamente
	$result = mysqli_query( $app_db, "DELETE FROM posts WHERE id = $id" );
	if ( ! $result ) {
        // Si hay un error en la consulta, termina el script y muestra el mensaje de error
		die( mysqli_error( $app_db ) );
	}
}