<?php

if ( ! file_exists( 'config.php' ) ) {
	die( 'ERROR:No existe config.php' );
}

session_start(); // Start the session

require 'config.php';

setlocale( LC_TIME, SITE_LANG );
date_default_timezone_set( SITE_TIMEZONE );

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



