<?php
if ($_SERVER["REQUEST_METHOD"] ==="POST" ){
    extract($_POST);

    require_once($_SERVER["DOCUMENT_ROOT"]. "/config/database.php");
    $ultimosDatos = $mysqli->query("SELECT * FROM usuarios_universidad ORDER BY id_usuario DESC LIMIT 1");
    $lastDate = $ultimosDatos->fetch_assoc();
    $lastID = $lastDate['id_usuario'];
    $lastID = $lastID + 1;
    

    if(isset($materia_id)){  
        $result = $mysqli->query("INSERT INTO usuarios_universidad (email, nombre_usuario, apellido, direccion, fecha_nacimiento, roles) VALUES ('$email','$nombre_usuario', '$apellido', '$direccion', '$fecha_nacimiento', 'MAESTRO')");
      $result2 = $mysqli->query("INSERT INTO materias_maestros (maestro_asignado, materia_id) VALUES ('$lastID', '$materia_id')");
        header("location: /views/admin/CRUD_MAESTROS/admin_maestros_dashboard.php");}

        }
        elseif (!isset($materia_id)) {
          $result = $mysqli->query("INSERT INTO usuarios_universidad (email, nombre_usuario, apellido, direccion, fecha_nacimiento, roles) VALUES ('$email','$nombre_usuario', '$apellido', '$direccion', '$fecha_nacimiento', 'MAESTRO')");
          $result2 = $mysqli->query("INSERT INTO materias_maestros (maestro_asignado) VALUES ('$lastID')");
            header("location: /views/admin/CRUD_MAESTROS/admin_maestros_dashboard.php");
        }

        
    else {
        echo "Tenemos un error companero";
    }
