<?php
 session_start();
if($_SESSION["user-data"]["roles"] === "ALUMNO"){
    try {
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "universidad_php";
        $user_data = $_SESSION["user-data"];

        $id_usuario = $user_data["id_usuario"];

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
                        <a href="/views/alumno/alumno_edit.php">Perfil</a>
                        <a href="/handle_db/logout.php">Logout</a>
                    </lu>
                </div>
            </div>
        </header>
        <main>
            <div class="flex justify-between p-4">
                <div>
                    <h1 class="text-3xl text-black font-semibold">Editar datos de perfil</h1>
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
                <section class="flex flex-col bg-white">
                    <h2 class="text-xl pl-2 py-2 border-[1px] border-white border-b-[#c2c5cd] mb-4">Información de Usuario</h2>
                    <!-- Aqui comienza la tabla para editar la información  -->
                  

                    <form class=" flex flex-col " method="post" action="/handle_db/alumno_handle_db/alumno_edit.php">
                    <div class="flex flex-col ml-4">
                        <h2 class="font-bold">Matricula</h2>
                        <input type="text" class="w-11/12 bg-[#e8ecee] rounded-sm disabled:opacity-75" value="<?=$user_data['matricula']?>" />
                        <input hidden name="id_usuario" value="<?= $user_data['id_usuario'] ?>"/>
                    </div>
                        <div class="flex flex-col py-2  mx-3">
                            <label class="font-bold" for="">Correo Electronico</label>
                            <input type="email" name="email" class="ring-1 ring-black" value="<?=$user_data['email']?>">
                        </div>
                        <div class="flex flex-col py-2  mx-3">
                            <label class="font-bold" for="">Contraseña ingresa para cambiar contraseña</label>
                            <input type="password" name="contracena" id="" class="ring-1 ring-black">
                        </div>
                        <div class="flex flex-col py-2  mx-3">
                            <label class="font-bold" for="">Nombre(s)</label>
                            <input type="text" name="nombre_usuario" id="" class="ring-1 ring-black" value="<?=$user_data['nombre_usuario']?>">
                        </div>
                        <div class="flex flex-col py-2  mx-3">
                            <label class="font-bold" for="">Apellio(s)</label>
                            <input type="text" name="apellido" id="" class="ring-1 ring-black" value="<?=$user_data['apellido']?>">
                        </div>
                        <div class="flex flex-col py-2  mx-3">
                            <label class="font-bold" for="">Dirección</label>
                            <input type="text" name="direccion" id="" class="ring-1 ring-black" value="<?=$user_data['direccion']?>">
                        </div>
                        <div class="flex flex-col py-2 mb-8  mx-3">
                            <label class="font-bold" for="">Fecha de Nacimiento</label>
                            <input type="date" name="fecha_nacimiento" id="" class="ring-1 ring-black" value="<?=$user_data['fecha_nacimiento']?>">
                        </div>
                        <div class="bg-[#f7f7f7] ">
                            <button class="bg-blue-500 text-white py-1 px-2 rounded-md w-36 m-4" type="submit">Guardar Cambios</button>
                        </div>

                    </form>
                </section>
            </div>

        </main>
    </section>
</body>

</html>