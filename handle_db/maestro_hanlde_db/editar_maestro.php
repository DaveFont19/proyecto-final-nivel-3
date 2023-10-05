<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    extract($_POST);

require_once($_SERVER["DOCUMENT_ROOT"]. "/config/database.php");


        $update= $mysqli->query("UPDATE usuarios_universidad SET email='$email', nombre_usuario='$nombre_usuario', apellido='$apellido', direccion='$direccion', fecha_nacimiento='$fecha_nacimiento'  WHERE id_usuario='$id_usuario'");
        header("location: /views/maestro/maestro_edit.php#");

} else {

} 