<?php
 session_start();
if($_SESSION["user-data"]["roles"] === "MAESTRO"){
    try {
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "universidad_php";
        $user_data = $_SESSION["user-data"];

        $db = new mysqli($host, $username, $password, $database);
        $stmnt = $db->query("SELECT * FROM usuarios_universidad WHERE email = '$user_data[email]'");
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
    <title>Maestro Dashboard</title>
</head>

<body class="flex w-screen h-screen">

    <aside class="bg-[#353a40] h-screen flex flex-col w-2/12">
        <a href="/views/maestro/maestro_dashboard.php" class="flex gap-2 items-center p-4 border-b-2 border-[#42474d]">
            <img class="h-12 w-12 rounded-full" src="/assets/logo.jpg" alt="logo">
            <label class=" text-[#c2c5cd] text-xl">Universidad</label>
        </a>
        <div class="flex flex-col p-4 border-b-2 border-[#42474d]">
            <span class=" text-[#c2c5cd]">Maestro</span>
            <span class=" text-[#c2c5cd]"><?= $usuario["nombre_usuario"] ?></span>
        </div>
        <div class="flex flex-col gap-6 p-4">
            <span class="text-[#c2c5cd] px-6">MENÚ MAESTROS
            </span>
            <a href="/views/maestro/maestro_alumnos_dashboard.php" class="gap-3 flex items-center">
                <span id="icon" class="material-symbols-outlined">
                    school
                </span>
                <label class="cursor-pointer text-[#c2c5cd]">Alumnos</label>
            </a>
        </div>

    </aside>
    <section class="flex flex-col w-10/12 bg-[#f5f6fa]">
        <header class="p-1 flex justify-between shadow-md bg-white">
            <div class="flex gap-3 items-center">
                <span class="material-symbols-outlined">
                    menu
                </span>
                <h1 class="p-4">Home</h1>
            </div>

            <div class="relative flex p-4">
                <span class="cursor-pointer" onclick="toggleDropdown()"><?= $usuario["nombre_usuario"] ?></span>
                <div id="myDropdown" class="dropdown-content">
                    <lu class="flex flex-col ">
                        <a href="/views/maestro/maestro_edit.php">Perfil</a>
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