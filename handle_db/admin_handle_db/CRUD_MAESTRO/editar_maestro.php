<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    extract($_POST);

require_once($_SERVER["DOCUMENT_ROOT"]. "/config/database.php");

$stmnt = $mysqli->query("SELECT * FROM usuarios_universidad WHERE id_usuario ='$id_usuario'");

if($stmnt->num_rows === 1){

    if(isset($new_id_materia) && $fecha_nacimiento !== "" ){

        $update= $mysqli->query("UPDATE usuarios_universidad SET nombre_usuario='$nombre_usuario',  apellido='$apellido', direccion ='$direccion', fecha_nacimiento='$fecha_nacimiento'  WHERE id_usuario='$id_usuario'");
        $update2 = $mysqli->query("UPDATE materias_maestros SET materia_id='$new_id_materia' WHERE id_materia_maestro='$id_materia_maestro' ");
        header("location: /views/admin/CRUD_MAESTROS/admin_maestros_dashboard.php");
    }
    elseif (!isset($new_id_materia) && $fecha_nacimiento !== "") {
        $update= $mysqli->query("UPDATE usuarios_universidad SET nombre_usuario='$nombre_usuario',  apellido='$apellido', direccion ='$direccion', fecha_nacimiento='$fecha_nacimiento'  WHERE id_usuario='$id_usuario'");
        header("location: /views/admin/CRUD_MAESTROS/admin_maestros_dashboard.php");
    }
    elseif (isset($new_id_materia) && $fecha_nacimiento == "") {
        $update= $mysqli->query("UPDATE usuarios_universidad SET nombre_usuario='$nombre_usuario',  apellido='$apellido', direccion ='$direccion' WHERE id_usuario='$id_usuario'");
        $update2 = $mysqli->query("UPDATE materias_maestros SET materia_id='$new_id_materia' WHERE id_materia_maestro='$id_materia_maestro' ");
        header("location: /views/admin/CRUD_MAESTROS/admin_maestros_dashboard.php");
    }
    elseif (!isset($new_id_materia) && $fecha_nacimiento == "") {
        $update= $mysqli->query("UPDATE usuarios_universidad SET nombre_usuario='$nombre_usuario',  apellido='$apellido', direccion ='$direccion' WHERE id_usuario='$id_usuario'");
        header("location: /views/admin/CRUD_MAESTROS/admin_maestros_dashboard.php");
    }

} 
else {
    header("location: /views/admin/CRUD_MAESTROS/admin_maestros_dashboard.php");
 }
 }