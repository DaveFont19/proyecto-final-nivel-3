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
    <section class="flex flex-col w-screen">
        <header class="p-1 flex justify-between shadow-md">
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
                        <a href="/handle_db/logout.php">Logout</a>
                        <a href="./alumno_edit.php">Editar Perfil</a>
                    </lu>
                </div>
            </div>
        </header>
        <!-- aqui comienza el encabezado de la tabla  -->
        <main>
            <div class="flex justify-between p-4">
                <div>
                    <h1 class="text-3xl text-black font-semibold">Calificaciones y mensajes de tus clases</h1>
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
            <div class=" ring-1 ring-[#c2c5cd] mx-4">
                <section class="flex flex-col">

                        <h2 class="text-xl pl-2 py-2 border-2 border-white border-b-[#c2c5cd]">Calificaciones y mensajes de tus clases</h2>

                    <div class="flex justify-between py-4">
                        <div class="flex ml-4">
                            <button class="bg-[#6c747e] px-3 py-1 rounded-l-md">Copy</button>
                            <button class="bg-[#6c747e] px-3 py-1">Excel</button>
                            <button class="bg-[#6c747e] px-3 py-1">PDF</button>
                            <select class="bg-[#6c747e] rounded-r-md">Colum Visibility</select>
                        </div>
                        <div class="mr-4">
                            <label>Search</label>
                            <input type="text" class="ring-1 ring-gray-400 rounded-sm">
                        </div>
                    </div>

                    <!-- esta de aqui es la tabla -->
                    <table class=" flex flex-col border-[1px] border-[#c2c5cd] mx-3">
                        <thead class="flex flex-col border-2 border-b-[#c2c5cd]">
                            <tr class="flex justify-between">
                                <th class="text-lg font-semibold">#</th>
                                <th class="text-lg font-semibold">Nombre de clase</th>
                                <th class="text-lg font-semibold">Calificacion</th>
                                <th class="text-lg font-semibold">Mensajes</th>
                            </tr>
                        </thead>
                        <tbody class="">
                        <?php
                            foreach ($calificaciones as $calificacion) {
                            ?>
                                <tr class="flex border-2 border-b-[#c2c5cd]">
                                    <td class=" w-1/5"><?= $calificacion["0"] ?></td>
                                    <td class="w-2/5"><?= $calificacion["1"] ?></td>
                                    <td class="w-1/5"><?= $calificacion["2"] ?></td>
                                    <td class=" w-1/5"><?= $calificacion["3"] ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </section>
            </div>

        </main>
    </section>
</body>

</html>