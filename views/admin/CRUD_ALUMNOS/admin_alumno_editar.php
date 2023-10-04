<div id="modalEditar" class="modal-editar justify-center hidden">
    <div class="w-[600px] h-[720px] self-center bg-white p-4">
        <h2 class="font-semibold text-4xl p-6  border-2 border-white border-b-[#c2c5cd]">Editar Maestro</h2>
        <form class="flex flex-col mt-4" method="post" action="/handle_db/admin_handle_db/CRUD_ALUMNOS/editar_alumnos.php">
            <input id='id_usuario' hidden name="id_usuario">
            <div class="flex flex-col mb-2">
                <label class="text-lg font-semibold">ID</label>
                <input id="matricula" type="text" name="matricula" class="ring-1 ring-[#c2c5cd]">
            </div>
            <div class="flex flex-col mb-2">
                <label class="text-lg font-semibold">Correo Electronico</label>
                <input id="email" type="email" name="email" class="ring-1 ring-[#c2c5cd]" disabled>
            </div>
            <div class="flex flex-col py-4  ">
                <label class="text-lg font-semibold">Nombre(s)</label>
                <input id="nombre_usuario" type="text" name="nombre_usuario" class="ring-1 ring-[#c2c5cd]">
                </input>
            </div>
            <div class="flex flex-col py-4  ">
                <label class="text-lg font-semibold">Apellido</label>
                <input id="apellido" type="text" name="apellido" class="ring-1 ring-[#c2c5cd]">
                </input>
            </div>
            <div class="flex flex-col pb-4 border-2 border-white border-b-[#c2c5cd] ">
                <label class="text-lg font-semibold">Direccion</label>
                <input id="direccion" type="text" name="direccion" class="ring-1 ring-[#c2c5cd]">
            </div>
            <div class="flex flex-col pb-4 border-2 border-white border-b-[#c2c5cd] ">
                <label class="text-lg font-semibold">Fecha de Nacimineto</label>
                <input id="fech_nacimiento" type="date" name="fecha_nacimiento" class="ring-1 ring-[#c2c5cd]">
            </div>
            <div class="flex justify-end gap-4 py-8">
                <button type="button" onclick="modalEditClose()" class="bg-gray-500 rounded-md text-white px-2 py-1">Cerrar</button>
                <button type="submit" class="bg-blue-500 rounded-md text-white px-2 py-1">Guarda Cambios</button>
            </div>
        </form>
    </div>
</div>