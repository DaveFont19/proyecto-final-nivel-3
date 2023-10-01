<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){
    extract($_POST);

    require_once($_SERVER["DOCUMENT_ROOT"]. "/config/database.php");

    $stmnt = $mysqli->query("SELECT * FROM usuarios_universidad WHERE id_usuario ='$id_usuario'");

    if($stmnt->num_rows === 1){
        $result = $stmnt->fetch_assoc();
        $update= $mysqli->query("UPDATE usuarios_universidad SET email='$email', roles='$roles', estado='$estado' WHERE id_usuario='$id_usuario'");
        header("location: /views/admin/PERMISOS_USUARIO/permisos_dashboard.php");
    }
}
?>