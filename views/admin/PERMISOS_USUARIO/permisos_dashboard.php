<?php require "../helper_admin.php"
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
    <?php require "../aside_bar.php"
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
                <span class="cursor-pointer" onclick="toggleDropdown()">Administrador</span>
                <div id="myDropdown" class="dropdown-content">
                    <lu class="flex flex-col ">
                        <a href="/handle_db/logout.php">Logout</a>
                        <a href="#">Dashboard</a>
                    </lu>
                </div>
            </div>
        </header>
        <main>
            <div class="flex justify-between p-4">
                <div>
                    <h1 class="text-3xl text-black font-semibold">Lista de Permisos</h1>
                </div>
                <div>
                    <a class="text-blue-500" href="#"> Home </a>
                    <a href="../admin_dashboard.php"> / Dashboard</a>
                </div>
            </div>
            <div class=" ring-1 ring-[#c2c5cd] mx-4">
                <section class="flex flex-col">
                    <h2 class="text-xl pl-2 py-2 border-2 border-white border-b-[#c2c5cd]">Información de permisos</h2>
                    <div class="flex justify-between py-4">
                        <div class="flex ml-4">
                            <button class="bg-[#6c747e] px-3 py-1 rounded-l-md text-white">Copy</button>
                            <button class="bg-[#6c747e] px-3 py-1 text-white">Excel</button>
                            <button class="bg-[#6c747e] px-3 py-1 text-white">PDF</button>
                            <select class="bg-[#6c747e] rounded-r-md text-white">Colum Visibility</select>
                        </div>
                        <div class="mr-4">
                            <label>Search</label>
                            <input type="text" class="ring-1 ring-gray-400 rounded-sm">
                        </div>
                    </div>
                    <table class=" flex flex-col border-[1px] border-[#c2c5cd] mx-3">
                        <thead class="flex flex-col border-2 border-b-[#c2c5cd]">
                            <tr class="flex justify-around">
                                <th class="text-lg font-semibold w-1/6">#</th>
                                <th class="text-lg font-semibold w-2/6">Email/Usuario</th>
                                <th class="text-lg font-semibold w-1/6">Permiso</th>
                                <th class="text-lg font-semibold w-1/6">Estado</th>
                                <th class="text-lg font-semibold w-1/6">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="flex flex-col ">
                            <?php
                            foreach ($usuarios as $persona) {
                            ?>
                                <tr class="flex pl-32  border-2 border-b-[#c2c5cd]">
                                    <td class=" w-1/6"><?= $persona["0"] ?></td>
                                    <td class=" w-2/6 pl-24"><?= $persona["4"] ?></td>
                                    <td class=" w-1/6 font-bold pl-8 <?= $persona['8'] ?>"><?= $persona["8"] ?></td>
                                    <td class=" w-1/6 pl-16 <?=($persona['11'] == 'Activo' )? 'text-green-500' : 'text-red-500' ?>" ><?= $persona["11"] ?></td>
                                    <td class=" w-1/6 cursor-pointer pl-20">
                                        <span class="material-symbols-outlined" onclick="openModalEditAdmin(event)">
                                            edit_square
                                        </span>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </section>
                <?php require "./permisos_edit.php"
                ?>
            </div>
        </main>
    </section>
</body>
</html>