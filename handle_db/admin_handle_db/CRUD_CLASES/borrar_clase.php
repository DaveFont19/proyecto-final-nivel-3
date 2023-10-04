<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){
    extract($_POST);

    require_once($_SERVER["DOCUMENT_ROOT"]. "/config/database.php");

    $result = $mysqli->query("DELETE FROM materias_maestros WHERE id_materia_maestro='$id_materia_maestro'");
    header("location: /views/admin/CRUD_CLASES/admin_clases_dashboard.php");
} else{
 echo "ERROR ";
}