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

    function deleteUsuariosDB($id) {
        $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
        $sentencia = $db -> prepare("DELETE FROM usuarios WHERE id=?");
        $sentencia -> execute([$id]);
    }