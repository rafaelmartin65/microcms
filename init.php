<?php
session_start(); // Start the session



$app_db = mysqli_connect( $host, $user, $password, $database, $port );
if ( $app_db === false ) {
	die( "Error al conectar con la base de datos" );
}

if ( isset ( $_GET['logout'])) {
	unset ($_SESSIOM['user']);
	redirect_to('index.php');
}

require( 'inc/posts.php' );
require( 'inc/helpers.php' );



