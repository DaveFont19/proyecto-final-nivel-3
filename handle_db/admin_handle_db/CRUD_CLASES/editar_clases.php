<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    extract($_POST);

require_once($_SERVER["DOCUMENT_ROOT"]. "/config/database.php");

$stmnt = $mysqli->query("SELECT * FROM materias_maestros WHERE id_materia_maestro ='$id_materia_maestro'");

if($stmnt->num_rows === 1){

        $update= $mysqli->query("UPDATE materias_maestros SET maestro_asignado='$maestro_asignado'  WHERE id_materia_maestro='$id_materia_maestro'");
        header("location: /views/admin/CRUD_CLASES/admin_clases_dashboard.php");

} else {

}
}