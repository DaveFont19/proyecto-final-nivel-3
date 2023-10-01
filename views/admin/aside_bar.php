
<aside class="bg-[#353a40] h-screen flex flex-col w-2/12">
        <a href="/views/admin/admin_dashboard.php" class="flex gap-2 items-center p-4 border-b-2 border-[#42474d]">
            <img href="/views/admin/admin_dashboard.php" class="h-12 w-12 rounded-full" src="/assets/logo.jpg" alt="logo">
            <label class=" text-[#c2c5cd] text-xl">Universidad</label>
        </a>
        <div class="flex flex-col p-4 border-b-2 border-[#42474d]">
            <span class=" text-[#c2c5cd]">Admin</span>
            <span class=" text-[#c2c5cd]"><?= $usuario["nombre_usuario"]; ?></span>
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
            <a href="/views/admin/CRUD_MAESTROS/admin_maestros_dashboard.php" class="gap-3 flex items-center">
                <span id="icon" class="material-symbols-outlined">
                    account_box
                </span>
                <label class="cursor-pointer text-[#c2c5cd]">Maestros</label>
            </a>
            <a href="/views/admin/CRUD_ALUMNOS/admin_alumnos_dashboard.php" class="gap-3 flex items-center">
                <span id="icon" class="material-symbols-outlined">
                    school
                </span>
                <label class="cursor-pointer text-[#c2c5cd]">Alumnos</label>
            </a>
            <a href="/views/admin/CRUD_CLASES/admin_clases_dashboard.php" class="gap-3 flex items-center">
                <span id="icon" class="material-symbols-outlined">
                    tv
                </span>
                <label class="cursor-pointer text-[#c2c5cd]">Clases</label>
            </a>
        </div>
    </aside>