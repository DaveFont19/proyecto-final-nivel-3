<?php require "../CRUD_MAESTROS/consulta_maestros.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="/handle_db/dropdown.js" defer></script>
    <script src="/handle_db/admin_handle_db/CRUD_MAESTRO/modal.js" defer></script>
    <script src="/handle_db/admin_handle_db/CRUD_MAESTRO/modalNuevoUsuario.js" defer></script>
    <link href="/style.css" rel="stylesheet">
    <title>Document</title>
</head>

<body class="flex w-screen h-screen">
    <?php require "../CRUD_MAESTROS/admin_maestros_nuevo.php"
    ?>
    <?php require "../CRUD_MAESTROS/admin_maestros_edit.php"
    ?>
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
                <div>
                    <span class="cursor-pointer" onclick="toggleDropdown()">Administrador</span><span class="material-symbols-outlined">
                        keyboard_arrow_down
                    </span>
                </div>

                <div id="myDropdown" class="dropdown-content">
                    <lu class="flex flex-col ">
                        <a href="/handle_db/logout.php">Logout</a>
                        <a href="#">Dashboard</a>
                    </lu>
                </div>
            </div>
        </header>
        <!-- aqui comienza el encabezado de la tabla  -->
        <main>

            <div class="flex justify-between p-4">
                <div>
                    <h1 class="text-3xl text-black font-semibold">Lista de Maestros</h1>
                </div>
                <div>
                    <a class="text-blue-500" href="#">Home</a>
                    <a>/ Dashboard</a>
                </div>
            </div>
            <div class=" ring-1 ring-[#c2c5cd] mx-4">
                <section class="flex flex-col">
                    <div class="flex justify-between">
                        <h2 class="text-xl pl-2 py-2 border-2 border-white border-b-[#c2c5cd]">Información de maestros</h2>
                        <button type="button" class="bg-blue-500 text-white mr-4 mt-4 rounded-md px-2 py-1" onclick="modalNuevo()">Agregar Maestro</button>
                    </div>
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
                    <!-- esta de aqui es la tabla -->
                    <table class=" flex flex-col border-[1px] border-[#c2c5cd] mx-3">
                        <thead class="flex flex-col border-2 border-b-[#c2c5cd]">
                            <tr class="flex justify-between">
                                <th class="text-lg font-semibold">#</th>
                                <th class="text-lg font-semibold">Nombre</th>
                                <th class="text-lg font-semibold">Email</th>
                                <th class="text-lg font-semibold">Dirección</th>
                                <th class="text-lg font-semibold">Fec. de Nacimiento</th>
                                <th class="text-lg font-semibold">Clase Asignada</th>
                                <th class="text-lg font-semibold">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            <?php
                            foreach ($usuarios as $persona) {
                            ?>
                                <tr class="flex border-2 border-b-[#c2c5cd]">
                                    <td class=" w-1/12"><?= $persona["0"] ?></td>
                                    <td class="w-1/12"><?= $persona["1"] ?></td>
                                    <td class="w-1/12"><?= $persona["2"] ?></td>
                                    <td class=" w-2/12"><?= $persona["3"] ?></td>
                                    <td class=" w-2/12"><?= $persona["4"] ?></td>
                                    <td class=" w-2/12"><?= $persona["5"] ?></td>
                                    <td class=" w-2/12 font-semibold <?= ($persona['6']) ? $persona['6'] : 'Sin asignar' ?>"><?= ($persona["6"]) ? $persona['6'] : "Sin asignar" ?></td>
                                    <td class="hidden"><?= $persona["7"] ?></td>
                                    <td class="hidden"><?= $persona["8"] ?></td>
                                    <td class=" w-1/12 cursor-pointer pl-20">
                                        <span class="material-symbols-outlined" onclick="modalEdit( event)">
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
            </div>
        </main>
    </section>
</body>

</html>