<?php
if ($_SERVER["REQUEST_METHOD"] ==="POST" ){
    extract($_POST);

    require_once($_SERVER["DOCUMENT_ROOT"]. "/config/database.php");
    if($email !== "" && $matricula !== "" )
        $result = $mysqli->query("INSERT INTO usuarios_universidad (matricula,email, nombre_usuario, apellido, direccion, fecha_nacimiento, roles) VALUES ('$matricula','$email','$nombre_usuario', '$apellido', '$direccion', '$fecha_nacimiento', 'ALUMNO')");

            header("location: /views/admin/CRUD_ALUMNOS/admin_alumnos_dashboard.php");


}    else {
    

    header("location: /views/admin/CRUD_ALUMNOS/admin_alumnos_dashboard.php");
    echo '<script>alert("Llena todos los espacios");</script>';
}