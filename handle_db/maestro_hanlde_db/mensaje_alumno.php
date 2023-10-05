<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){
    extract($_POST);

    require_once($_SERVER["DOCUMENT_ROOT"] . "/config/database.php");

    $result = $mysqli->query("UPDATE materias_alumnos SET mensaje_maestro='$mensaje_maestro', calificaciones='$calificaciones' WHERE id_materia_alumnos='$id_materia_alumnos'");
    header("location: /views/maestro/maestro_alumnos_dashboard.php");
} else {
    echo "ERROR AL MANDAR MENSAJE";
}