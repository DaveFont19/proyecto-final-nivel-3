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

    <aside class="bg-[#353a40] h-screen flex flex-col w-2/12">
        <a href="/views/maestro/maestro_dashboard.php" class="flex gap-2 items-center p-4 border-b-2 border-[#42474d]">
            <img class="h-12 w-12 rounded-full" src="/assets/logo.jpg" alt="logo">
            <label class=" text-[#c2c5cd] text-xl">Universidad</label>
        </a>
        <div class="flex flex-col p-4 border-b-2 border-[#42474d]">
            <span class=" text-[#c2c5cd]">Maestro</span>
            <span class=" text-[#c2c5cd]">maestro maestro</span>
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
                <span class="cursor-pointer" onclick="toggleDropdown()">David Fontes</span>
                <div id="myDropdown" class="dropdown-content">
                    <lu class="flex flex-col ">
                        <a href="/views/maestro/maestro_edit.php">Perfil</a>
                        <a href="#">Logout</a>
                    </lu>
                </div>
            </div>
        </header>
        <main>
            <div class="flex justify-between p-4">
                <div>
                    <h1 class="text-3xl text-black font-semibold">Alumnos de la Clase de Programacion</h1>
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
            <div class=" ring-1 ring-[#c2c5cd] mx-4 bg-white">
                <section class="flex flex-col">

                    <h2 class="text-xl pl-2 py-2 border-2 border-white border-b-[#c2c5cd]">Alumnos de la clase de programacion</h2>

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
                    <table class=" flex flex-col border-[1px] border-[#c2c5cd] mx-4">
                        <thead class="flex flex-col border-2 border-b-[#c2c5cd]">
                            <tr class="flex justify-between">
                                <th class="text-lg font-semibold">#</th>
                                <th class="text-lg font-semibold">Nombre de alumno</th>
                                <th class="text-lg font-semibold">Calificacion</th>
                                <th class="text-lg font-semibold">Mensajes</th>
                                <th class="text-lg font-semibold">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            <tr class="flex justify-between">
                                <td>1</td>
                                <td>Programacion</td>
                                <td>85</td>
                                <td>Aprobado</td>
                                <td>
                                    <span class="material-symbols-outlined">
                                        note_add
                                    </span>
                                    <span class="material-symbols-outlined">
                                        send
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </section>
            </div>

        </main>
    </section>
</body>

</html>