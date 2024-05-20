<?php

/**
 * Redirige a una URL
 *
 * @param $path
 */
function redirect_to( $path ) {
	header( 'Location: ' . 'localhost' . $path );
	die();
}

function generate_hash($action){
	return md5($action);
}

/**
 * Comprueba si una secuencia alfanumérica es correcta
 *
 * @param $action
 * @param $hash
 *
 * @return bool
 */
function check_hash( $action, $hash ) {
	if ( generate_hash( $action ) == $hash ) {
		return true;
	}
	return false;
}
