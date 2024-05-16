<?php

// Configura la salida de errores por pantalla
error_reporting(E_ALL);
ini_set('disploay_errors', 1);

setlocale(LC_TIME, 'es', 'spa', 'es_ES');
date_default_timezone_set('Atlantic/Canary');

// Conexión a Base de Datos
$host = 'localhost';
$user = 'root';
$password = '' ;
$database = 'microcms';
$port = '3306';

$app_db = mysqli_connect( $host, $user, $password, $database, $port );
if ( $app_db === false ) {
	die( "Error al conectar con la base de datos" );
}

require( 'inc/posts.php' );
require( 'inc/helpers.php' );



