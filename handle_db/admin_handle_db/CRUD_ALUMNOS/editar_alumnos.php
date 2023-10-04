<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    extract($_POST);

require_once($_SERVER["DOCUMENT_ROOT"]. "/config/database.php");

$stmnt = $mysqli->query("SELECT * FROM usuarios_universidad WHERE id_usuario ='$id_usuario'");

if($stmnt->num_rows === 1){

   
    if($fecha_nacimiento !== "" ){

        $update= $mysqli->query("UPDATE usuarios_universidad SET nombre_usuario='$nombre_usuario',  apellido='$apellido', direccion ='$direccion', fecha_nacimiento='$fecha_nacimiento', matricula='$matricula' WHERE id_usuario='$id_usuario'");
        header("location: /views/admin/CRUD_ALUMNOS/admin_alumnos_dashboard.php");
    }
    elseif ($fecha_nacimiento == "") {
        $update= $mysqli->query("UPDATE usuarios_universidad SET nombre_usuario='$nombre_usuario',  apellido='$apellido', direccion ='$direccion', matricula='$matricula' WHERE id_usuario='$id_usuario'");
         header("location: /views/admin/CRUD_ALUMNOS/admin_alumnos_dashboard.php");
    }

} else {
    header("location: /views/admin/CRUD_ALUMNOS/admin_alumnos_dashboard.php");
}
}