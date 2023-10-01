<div id="modalEditar" class="modal justify-center">
    <div class="w-[400px] h-[420px] self-center bg-white p-4">
        <h2 class="font-semibold text-4xl p-6  border-2 border-white border-b-[#c2c5cd]">Editar el usuario</h2>
        <form class="flex flex-col mt-4" method="post" action="/handle_db/admin_handle_db/actualizar_usuario.php">
            <input id='idUsuario' hidden name="id_usuario">
            <div class="flex flex-col mb-2">
                <label class="text-lg font-semibold">Email del Usuario</label>
                <input id="emailUsuario" type="email" name="email" class="ring-1 ring-[#c2c5cd]">
            </div>
            <div class="flex flex-col py-4  ">
                <label class="text-lg font-semibold">Rol del usuario</label>
                <select id="rolUsuario" name="roles" class="ring-1 ring-[#c2c5cd]">
                    <option value="ADMIN">ADMIN</option>
                    <option value="MAESTRO">MAESTRO</option>
                    <option value="ALUMNO">ALUMNO</option>
                </select>
            </div>
            <div class="flex flex-col pb-4 border-2 border-white border-b-[#c2c5cd] ">
                <label class="text-lg font-semibold">Estado del Usuario</label>
                <select id="estadoUsuario" name="estado" class="ring-1 ring-[#c2c5cd]">
                    <option value="Activo">Activo</option>
                    <option value="Inactivo">Inactivo</option>
                </select>
            </div>
            <div class="flex justify-end gap-4 py-8">
                <button type="button" onclick="closeModalEditAdmin()" class="bg-gray-500 rounded-md text-white px-2 py-1">Cerrar</button>
                <button type="submit" onclick="closeModalEditAdmin()" class="bg-blue-500 rounded-md text-white px-2 py-1">Guarda Cambios</button>
            </div>
        </form>
    </div>
</div>