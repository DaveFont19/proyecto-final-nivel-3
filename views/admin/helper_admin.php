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
        $stmnt = $db->query("SELECT * FROM usuarios_universidad ");
        $usuarios = $stmnt->fetch_all();

        $email = $_SESSION["user-data"]["email"];

        $stmnt2 = $db->query("SELECT * FROM usuarios_universidad WHERE email='$email'");
        $usuario = $stmnt2->fetch_assoc();
    } catch (mysqli_sql_exception $e) {
        echo "ERROR: " . $e->getMessage();
    }
} else {
    header("location: /handle_db/logout.php");
    exit();
}
?>