<?php

// Configura la salida de errores por pantalla
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Verifica si las constantes ya están definidas antes de definirlas
if (!defined('SITE_URL')) {
    define('SITE_URL', 'http://localhost/microcms');
}

if (!defined('SITE_TIMEZONE')) {
    define('SITE_TIMEZONE', 'Atlantic/Canary');
}

if (!defined('SITE_LANG')) {
    define('SITE_LANG', ['es', 'spa', 'es_ES']);
}

// Conexión a Base de Datos
if (!defined('DB_HOST')) {
    define('DB_HOST', 'localhost');
}

if (!defined('DB_USER')) {
    define('DB_USER', 'root');
}

if (!defined('DB_PASSWORD')) {
    define('DB_PASSWORD', '');
}

if (!defined('DB_DATABASE')) {
    define('DB_DATABASE', 'microcms');
}

if (!defined('DB_PORT')) {
    define('DB_PORT', '3306');
}

// Credenciales de Administrador
if (!defined('ADMIN_USER')) {
    define('ADMIN_USER', 'rafael');
}

if (!defined('ADMIN_PASS')) {
    define('ADMIN_PASS', 'rafaelpass');
}

