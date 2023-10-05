<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){
    extract($_POST);

    require_once($_SERVER["DOCUMENT_ROOT"]. "/config/database.php");

    $delete = $mysqli->query("DELETE FROM materias_alumnos WHERE id_materia_alumnos = '$id_materia_alumnos'");
    header("location: /views/alumno/CLASES/alumno_clases_dashboard.php");
} 
else {    echo "TENEMOS UN PROBLEMA HOUSTON"; }

