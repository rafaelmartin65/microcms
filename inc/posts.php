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
 * Inserta un nuevo post en la base de datos
 */
function insert_post($title, $excerpt, $content)
{
    global $app_db;

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
 * Busca y devuelve un post específico por su ID
 * Si no lo encuentra, devuelve false
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
