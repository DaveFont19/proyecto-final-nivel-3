<?php
 session_start();
if($_SESSION["user-data"]["roles"] === "ALUMNO"){
    try {
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "universidad_php";
        $user_data = $_SESSION["user-data"];     
        $id_usuario = $_SESSION["user-data"]["id_usuario"];

        $db = new mysqli($host, $username, $password, $database);
        $stmnt = $db->query("SELECT * FROM usuarios_universidad WHERE id_usuario = '$id_usuario'");
        $usuario = $stmnt->fetch_assoc();
    } catch (mysqli_sql_exception $e) {
        echo "ERROR: " . $e->getMessage();
    }

} else {
    header("location: /handle_db/logout.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="/handle_db/dropdown.js" defer></script>
    <link href="/style.css" rel="stylesheet">
    <title>Document</title>
</head>

<body class="flex w-screen h-screen">
<?php require "./aside_alumno.php"
?>
    <section class="flex flex-col w-10/12 bg-[#f5f6fa]">
        <header class="p-1 flex justify-between shadow-md bg-white">
            <div class="flex gap-3 items-center">
                <span class="material-symbols-outlined">
                    menu
                </span>
                <h1 class="p-4">Home</h1>
            </div>

            <div class="relative flex p-4">
                <span class="cursor-pointer" onclick="toggleDropdown()">David Fontes</span>
                <div id="myDropdown" class="dropdown-content">
                    <lu class="flex flex-col ">
                        <a href="/views/alumno/alumno_edit.php">Editar Perfil</a>
                        <a href="/handle_db/logout.php">Logout</a>
                    </lu>
                </div>
            </div>
        </header>
        <main>
            <div class="flex justify-between p-4">
                <div>
                    <h1 class="text-3xl">Dashboard</h1>
                </div>

                <div>
                    <a class="text-blue-500" href="#">
                        Home
                    </a>
                    <label>
                        / Dashboard
                    </label>
                </div>
            </div>
        </main>
        <div class="ml-4 w-1/2 rounded-md shadow-xl bg-white">
            <h2 class="pl-3 text-lg">
                Bienvenido
            </h2>
            <p class="pl-3 pt-2 pb-3">
                Selecciona la acción que quieras realizar en las pestañas del menú de la izquierda
            </p>
        </div>
    </section>

</body>

</html>