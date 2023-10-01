<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){
    extract($_POST);

    require_once($_SERVER["DOCUMENT_ROOT"] . "/config/database.php");

    $stmnt = $mysqli->query("SELECT * FROM usuarios_universidad WHERE email ='$email'");

    if($stmnt->num_rows === 1){
        $result = $stmnt->fetch_assoc();

        if(password_verify($contracena, $result["contracena"])){
            session_start();
            switch ($roles = $result["roles"]) {
                case $roles === "ADMIN":
                    $_SESSION["user-data"] = $result;
                    header("location: /views/admin/admin_dashboard.php");
                    break;
                case $roles === "MAESTRO":
                    $_SESSION["user-data"] = $result;
                    header("location: /views/maestro/maestro_dashboard.php");
                     break;                
                case $roles === "ALUMNO":
                    $_SESSION["user-data"] = $result;
                    header("location: /views/alumno/alumno_dashboard.php");
                    break;
                default:
                header("location: /views/login.php");
                    break;
            }

        }
    } else {
        header("location: /views/login.php");
    }
}