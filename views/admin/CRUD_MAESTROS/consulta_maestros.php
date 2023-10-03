<?php
session_start();
if ($_SESSION["user-data"]["roles"] === "ADMIN") {
    try {
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "funval";
        $user_data = $_SESSION["user-data"];

        $db = new mysqli($host, $username, $password, $database);
        $stmnt = $db->query("SELECT u.id_usuario, u.nombre_usuario, u.apellido, u.email, u.direccion, u.fecha_nacimiento, m.nombre_materia, m.id_materia, ma.id
        FROM usuarios_universidad AS u
        INNER JOIN materias_inscritas AS ma ON u.id_usuario = ma.id_maestro
        INNER JOIN materias_universidad AS m ON ma.materia_id = m.id_materia
        WHERE roles= 'MAESTRO'");
        $usuarios = $stmnt->fetch_all();

        $stmnt2 = $db->query("SELECT id_materia, nombre_materia FROM materias_universidad");
        $materias = $stmnt2->fetch_all();

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