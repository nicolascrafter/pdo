<?php
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

require_once "functions.php";

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
            if ($params[1] == 'delete') {
                if (empty($params[2])) {
                    echo "no se puede elminar: no hay ID";
                } else {
                    deleteUsuarios($params[2]);
                }
            } else {
                getUsuarios($params[1]);
            }
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
