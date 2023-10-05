
<?php
session_start();
if ($_SESSION["user-data"]["roles"] === "ALUMNO") {
    try {
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "universidad_php";
        $user_data = $_SESSION["user-data"];
        $id_usuario = $_SESSION["user-data"]["id_usuario"];


        $db = new mysqli($host, $username, $password, $database);

        $stmnt = $db->query("SELECT ma.id_materia_alumnos , m.nombre_materia, ma.calificaciones, ma.mensaje_maestro
        FROM materias_alumnos AS ma
        INNER JOIN materias_maestros AS mm ON ma.id_maestros_materia = mm.id_materia_maestro
        INNER JOIN materias_universidad AS m ON mm.materia_id = m.id_materia
        WHERE matricula_alumnos = '$id_usuario'");
        $calificaciones = $stmnt->fetch_all();


        $email = $_SESSION["user-data"]["email"];
        $stmnt3 = $db->query("SELECT * FROM usuarios_universidad WHERE id_usuario='$id_usuario'");
        $usuario = $stmnt3->fetch_assoc();


    } catch (mysqli_sql_exception $e) {
        echo "ERROR: " . $e->getMessage();
    }
} else {
    header("location: /handle_db/logout.php");
    exit();
}
?><!DOCTYPE html>
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
<?php require "../aside_alumno.php"
?>
    <section class="flex flex-col w-screen bg-[#f5f6fa]">
        <header class="p-1 flex justify-between shadow-md bg-white">
            <div class="flex gap-3 items-center">
                <span class="material-symbols-outlined">
                    menu
                </span>
                <h1 class="p-4">Home</h1>
            </div>
            <div class="relative flex p-4">
                <div>
                    <span class="cursor-pointer" onclick="toggleDropdown()">Administrador</span><span class="material-symbols-outlined">
                        keyboard_arrow_down
                    </span>
                </div>

                <div id="myDropdown" class="dropdown-content">
                    <lu class="flex flex-col ">
                        <a href="#">Logout</a>
                        <a href="#">Dashboard</a>
                    </lu>
                </div>
            </div>
        </header>
        <!-- aqui comienza el encabezado de la tabla  -->
        <main>
            <div class="flex justify-between p-4">
                <div>
                    <h1 class="text-3xl text-black font-semibold">Esquema de clases</h1>
                </div>
                <div>
                    <a class="text-blue-500" href="#">
                        Home
                    </a>
                    <a>
                        / Dashboard
                    </a>
                </div>
            </div>



            <!-- esta de aqui es la tabla -->
            <div class="flex w-full gap-4 justify-between">
                <div class="flex flex-col bg-white w-2/3 border-2 border-[#c2c5cd] ml-4">
                    <h2 class="text-xl mb-8 pl-2 py-2 border-2 border-white border-b-[#c2c5cd]">Tus Materias Inscritas</h2>
                    <table class=" flex flex-col">

                        <thead class="flex flex-col border-2 border-white border-b-[#c2c5cd]">
                            <tr class="flex justify-between">
                                <th class="text-lg font-bold">#</th>
                                <th class="text-lg font-bold">Materia</th>
                                <th class="text-lg font-bold">Darse de baja</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            <tr class="flex justify-between">
                                <td>1</td>
                                <td>Programacion</td>
                                <td> <span class="material-symbols-outlined">
                                        disabled_by_default
                                    </span></td>

                            </tr>
                        </tbody>
                    </table>
                </div>

                <form class="bg-white w-1/3 flex flex-col" method="post" action="#s">
                    <h2 class="text-xl mb-8 px-2 border-2 border-white border-b-[#c2c5cd]">Materias para inscribir</h2>
                    <label class="px-2">Selecciona la(s) Clase(s) usa la tecla ctrl</label>
                    <li class="border-2 border-[#c2c5cd] list-none mx-2">
                        <ul>Front-end</ul>
                        <ul>Back-end</ul>
                    </li>
                    <button type="submit" class="bg-blue-500 self-end px-2 py-1 m-3 rounded-md text-white hover:bg-blue-700 active:bg-blue-800">Inscribirse</button>
                </form>
            </div>

        </main>
    </section>
</body>

</html>