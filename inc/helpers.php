<?php

/**
 * Redirige a una URL
 *
 * @param $path
 */
function redirect_to($path)
{
	header('Location: ' . 'localhost' . $path);
	die();
}

function generate_hash($action)
{
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
function check_hash($action, $hash)
{
	if (generate_hash($action) == $hash) {
		return true;
	}
	return false;
}

function logout()
{
	// Destruye la sesión
	session_unset(); // Elimina todas las variables de sesión
	session_destroy(); // Destruye la sesión

	// Redirige a la página principal
	header('Location: index.php');
	exit;
}

function is_logged_in() 
{
	$is_user_logged_in = isset($_SESSION['user'])  &&  $_SESSION['user'] === 'rafael';
	return $is_user_logged_in;
}

