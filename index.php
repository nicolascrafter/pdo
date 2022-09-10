<?php
    function load_tareas() {
        $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
        $sentencia = $db -> prepare("SELECT * FROM 'tareas'");
        return $sentencia -> fetchAll(PDO::FETCH_OBJ);
    }

    echo var_dump(load_tareas());
?>