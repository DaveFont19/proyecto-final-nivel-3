<?php
    try {
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "funval";
        $user_data = $_SESSION["user-data"];

        $db = new mysqli($host, $username, $password, $database);
        $stmnt = $db->query("SELECT * FROM usuarios_universidad WHERE email = '$user_data[email]'");
        $usuario = $stmnt->fetch_assoc();
    } catch (mysqli_sql_exception $e) {
        echo "ERROR: " . $e->getMessage();
    }

?>