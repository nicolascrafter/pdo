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

    function getUsuarios($dni = NULL) {
        echo var_dump(getUsuariosDB($dni));
    }

    // echo var_dump(getUsuarios());
    // echo "<br><br>";
    // echo var_dump(getUsuarios(38106534));
