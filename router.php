<?php
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

require_once "index.php";

//recibir/leer la accion
if (!empty($_GET['action'])) {
    $accion = $_GET['action'];
} else {
    $accion = 'usuarios';
}

// parseo el string de action por "/" y me devuelve el arreglo
$params = explode('/', $accion);

//
switch ($params[0]) {
    case 'usuarios':
        if (empty($params[1])) {
            getUsuarios();
        } else {
            getUsuarios($params[1]);
        }
        break;
    case 'addUsuarios':
        postUsuarios();
        break;
    case 'formUsuario':
        showForm();
        break;
    default:
        echo ('404 page not found');
        break;
}
