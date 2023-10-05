<aside class="bg-[#353a40] h-screen flex flex-col w-2/12">
        <a href="/views/alumno/alumno_dashboard.php" class="flex gap-2 items-center p-4 border-b-2 border-[#42474d]">
            <img href="/views/admin/admin_dashboard.php" class="h-12 w-12 rounded-full" src="/assets/logo.jpg" alt="logo">
            <label class=" text-[#c2c5cd] text-xl">Universidad</label>
        </a>
        <div class="flex flex-col p-4 border-b-2 border-[#42474d]">
            <span class=" text-[#c2c5cd]">Alumno</span>
            <span class=" text-[#c2c5cd]"><?= $usuario["nombre_usuario"] . $usuario["apellido"] ?></span>
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