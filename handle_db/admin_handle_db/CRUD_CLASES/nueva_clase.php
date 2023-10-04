<?php
if ($_SERVER["REQUEST_METHOD"] ==="POST" ){
    extract($_POST);

    require_once($_SERVER["DOCUMENT_ROOT"]. "/config/database.php");
    

    $result = $mysqli->query("INSERT INTO materias_maestros (maestro_asignado, materia_id) VALUES ('$maestro_asignado','$materia_id')");

        if($result){
            header("location: /views/admin/CRUD_CLASES/admin_clases_dashboard.php");
        }
        
}else {
        echo "Tenemos un error companero";
    }
