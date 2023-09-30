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

                    <form class=" flex flex-col " method="post" action="#">
                        <div class="flex flex-col py-2  mx-3">
                            <label class="font-bold" for="">Correo Electronico</label>
                            <input type="email" name="email_alumno" id="" class="ring-1 ring-black">
                        </div>
                        <div class="flex flex-col py-2  mx-3">
                            <label class="font-bold" for="">Contraseña ingresa para cambiar contraseña</label>
                            <input type="password" name="contracena_alumno" id="" class="ring-1 ring-black">
                        </div>
                        <div class="flex flex-col py-2  mx-3">
                            <label class="font-bold" for="">Nombre(s)</label>
                            <input type="text" name="nomnre_alumno" id="" class="ring-1 ring-black">
                        </div>
                        <div class="flex flex-col py-2  mx-3">
                            <label class="font-bold" for="">Apellio(s)</label>
                            <input type="text" name="apellido_alumno" id="" class="ring-1 ring-black">
                        </div>
                        <div class="flex flex-col py-2  mx-3">
                            <label class="font-bold" for="">Dirección</label>
                            <input type="text" name="dirección_alumno" id="" class="ring-1 ring-black">
                        </div>
                        <div class="flex flex-col py-2 mb-8  mx-3">
                            <label class="font-bold" for="">Fecha de Nacimiento</label>
                            <input type="date" name="nacimiento_alumno" id="" class="ring-1 ring-black">
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