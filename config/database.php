<?php
try {
    $host="localhost";
    $username="root";
    $password="";
    $dbname="login_db";

    $mysqli= new mysqli($host,$username,$password,$dbname);


} catch (mysqli_sql_exception $e) {
    echo "ERROR" . $e->getMessage();
}