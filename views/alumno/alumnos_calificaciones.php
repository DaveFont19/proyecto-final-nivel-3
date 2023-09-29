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
        <a href="/views/alumno/alumno_dashboard.php" class="flex gap-2 items-center p-4 border-b-2 border-[#42474d]">
            <img href="/views/admin/admin_dashboard.php" class="h-12 w-12 rounded-full" src="/assets/logo.jpg" alt="logo">
            <label class=" text-[#c2c5cd] text-xl">Universidad</label>
        </a>
        <div class="flex flex-col p-4 border-b-2 border-[#42474d]">
            <span class=" text-[#c2c5cd]">Alumno</span>
            <span class=" text-[#c2c5cd]">David Fontes</span>
        </div>
        <div class="flex flex-col gap-6 p-4">
            <span class="text-[#c2c5cd] px-6">MENÚ ALUMNOS
            </span>
            <a href="/views/alumno/alumnos_calificaciones.php" class="gap-3 flex items-center">
            <span id="icon" class="material-symbols-outlined">
task
</span>
                <label class="cursor-pointer text-[#c2c5cd]">Ver Calificaciones</label>
            </a>
            <a href="/views/alumno/CLASES/alumno_clases_dashboard.php" class="gap-3 flex items-center">
                <span id="icon" class="material-symbols-outlined">
                    desktop_windows
                </span>
                <label class="cursor-pointer text-[#c2c5cd]">Administra tus clases</label>
            </a>
        </div>

    </aside>
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
                            <tr class="flex justify-between">
                                <td>1</td>
                                <td>Programacion</td>
                                <td>85</td>
                                <td>Aprobado</td>
                            </tr>
                        </tbody>
                    </table>
                </section>
            </div>

        </main>
    </section>
</body>

</html>