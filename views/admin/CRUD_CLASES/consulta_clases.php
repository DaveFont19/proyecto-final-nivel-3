<?php
session_start();
if ($_SESSION["user-data"]["roles"] === "ADMIN") {
    try {
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "universidad_php";


        $db = new mysqli($host, $username, $password, $database);
        $stmnt = $db->query("SELECT mm.id_materia_maestro, mm.materia_id, m.nombre_materia,  u.nombre_usuario, u.id_usuario, u.apellido, m.id_materia, ma.id_maestros_materia, ma.matricula_alumnos 
        FROM materias_maestros  AS mm
        LEFT JOIN usuarios_universidad AS u ON mm.maestro_asignado =  u.id_usuario
        INNER JOIN materias_universidad AS m ON mm.materia_id = m.id_materia
        LEFT JOIN materias_alumnos AS  ma ON mm.maestro_asignado = ma.id_maestros_materia");
        $usuarios = $stmnt->fetch_all();


        $stmnt2 = $db->query("SELECT id_usuario, nombre_usuario FROM usuarios_universidad WHERE roles='MAESTRO'");
        $maestros = $stmnt2->fetch_all();

        $stmnt4 = $db->query("SELECT id_materia, nombre_materia FROM materias_universidad");
        $materias = $stmnt4->fetch_all();

        $email = $_SESSION["user-data"]["email"];
        $stmnt3 = $db->query("SELECT * FROM usuarios_universidad WHERE email='$email'");
        $usuario = $stmnt3->fetch_assoc();


    } catch (mysqli_sql_exception $e) {
        echo "ERROR: " . $e->getMessage();
    }
} else {
    header("location: /handle_db/logout.php");
    exit();
}
?>