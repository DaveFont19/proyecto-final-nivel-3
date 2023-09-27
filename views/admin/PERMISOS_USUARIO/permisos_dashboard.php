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
        <div class="flex gap-2 items-center p-4 border-b-2 border-[#42474d]">
            <img href="/views/admin/admin_dashboard.php" class="h-12 w-12 rounded-full" src="/assets/logo.jpg" alt="logo">
            <label class=" text-[#c2c5cd] text-xl">Universidad</label>
        </div>
        <div class="flex flex-col p-4 border-b-2 border-[#42474d]">
            <span class=" text-[#c2c5cd]">admin</span>
            <span class=" text-[#c2c5cd]">Administrador</span>
        </div>
        <div class="flex flex-col gap-6 p-4">
            <span class="text-[#c2c5cd] px-6">MENÚ ADMINISTRACIÓN
            </span>
            <a href="/views/admin/PERMISOS_USUARIO/permisos_dashboard.php" class="gap-3 flex items-center">
                <span id="icon" class="material-symbols-outlined">
                    manage_accounts
                </span>
                <label class="cursor-pointer text-[#c2c5cd]">Permisos</label>
            </a>
            <a class="gap-3 flex items-center">
                <span id="icon" class="material-symbols-outlined">
                    account_box
                </span>
                <label class="cursor-pointer text-[#c2c5cd]">Maestros</label>
            </a>
            <a class="gap-3 flex items-center">
                <span id="icon" class="material-symbols-outlined">
                    school
                </span>
                <label class="cursor-pointer text-[#c2c5cd]">Alumnos</label>
            </a>
            <a class="gap-3 flex items-center">
                <span id="icon" class="material-symbols-outlined">
                    tv
                </span>
                <label class="cursor-pointer text-[#c2c5cd]">Clases</label>
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
                <span class="cursor-pointer" onclick="toggleDropdown()">Administrador</span>
                <div id="myDropdown" class="dropdown-content">
                    <lu class="flex flex-col ">
                        <a href="#">Logout</a>
                        <a href="#">Dashboard</a>
                    </lu>
                </div>
            </div>
        </header>
        <main>
            <div class="flex justify-between p-4">
                <div>
                    <h1 class="text-3xl text-red-600">Lista de Permisos</h1>
                </div>

                <div>
                    <a class="text-blue-50" href="#">
                        Home
                    </a>
                    <a>
                        / Dashboard
                    </a>
                </div>
            </div>
        </main>
        <div class="h-full max-w-max">
            <thead class="h-20 bg-slate-500">
                <tr>
                    <th class="text-red-500">#</th>
                    <th class="text-slate-600">Email/Usuario</th>
                    <th class="text-lg font-bold">Permiso</th>
                    <th class="text-lg font-bold">Estado</th>
                    <th class="text-lg font-bold">Acciones</th>
                </tr>
            </thead>
        </div>
    </section>

</body>

</html>