<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){
    extract($_POST);

    require_once($_SERVER["DOCUMENT_ROOT"]. "/config/database.php");

    $result = $mysqli->query("DELETE FROM usuarios_universidad WHERE id_usuario='$id_usuario'");
    header("location: /views/admin/CRUD_ALUMNOS/admin_alumnos_dashboard.php");
} else{
 echo "ERROR ";
}