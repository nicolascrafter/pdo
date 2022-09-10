<?php
    require_once "FunctionsDB.php";

    function getUsuarios($dni = NULL) {
        echo var_dump(getUsuariosDB($dni));
    }

    function postUsuarios() {
        // var_dump($_POST);
        if (isset($_POST["dni"]) && isset($_POST["nombre"])) {
            if (!empty($_POST["dni"]) && !empty($_POST["nombre"])) {
                $dni = intval($_POST["dni"]);
                $nombre = $_POST["nombre"];
                postUsuariosDB($dni, $nombre);
                echo "formulario exitoso";
            }
        }
        echo "El formulario no es valido";
        // postUsuariosDB(44418075, "Mateo");
    }

    function deleteUsuarios($id) {
        deleteUsuariosDB($id);
        echo "Se borro el usuario con id ".$id;
    }

    function showForm() {
        require_once "template.php";
    }
    // echo var_dump(getUsuarios());
    // echo "<br><br>";
    // echo var_dump(getUsuarios(38106534));
