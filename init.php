<?php

// Configura la salida de errores por pantalla
error_reporting(E_ALL);
ini_set('disploay_errors', 1);

setlocale(LC_TIME, 'es', 'spa', 'es_ES');
date_default_timezone_set('Atlantic/Canary');

require( 'inc/posts.php' );
