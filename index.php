<?php
    function load_tareas($id = NULL) {
        $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
        if($id == NULL) {
            $sentencia = $db -> prepare("SELECT * FROM tareas");
            $sentencia -> execute();
            return $sentencia -> fetchAll(PDO::FETCH_OBJ);
        }
        $sentencia = $db -> prepare("SELECT * FROM tareas WHERE id=?");
        $sentencia -> execute([$id]);
        return $sentencia -> fetch(PDO::FETCH_OBJ);
        // var_dump($sentencia);
    }

    function getUsuariosDB($dni = NULL) {
        $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
        if($dni == NULL) {
            $sentencia = $db -> prepare("SELECT * FROM usuarios");
            $sentencia -> execute();
            return $sentencia -> fetchAll(PDO::FETCH_OBJ);
        }
        $sentencia = $db -> prepare("SELECT * FROM usuarios WHERE dni=?");
        $sentencia -> execute([$dni]);
        return $sentencia -> fetch(PDO::FETCH_OBJ);
        // var_dump($sentencia);
    }

    function postUsuariosDB($dni, $nombre) {
        $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
        $sentencia = $db -> prepare("INSERT INTO usuarios(dni, nombre) VALUES (?,?)");
        $sentencia -> execute([$dni, $nombre]);
    }

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

    function showForm() {
        require "template.php";
    }
    // echo var_dump(getUsuarios());
    // echo "<br><br>";
    // echo var_dump(getUsuarios(38106534));
