<div id="modalNuevo" class="modal-nuevo justify-center hidden">
    <div class="w-[600px] h-[720px] self-center bg-white p-4">
        <h2 class="font-semibold text-4xl p-6  border-2 border-white border-b-[#c2c5cd]">Ingresar Maestro</h2>
        <form class="flex flex-col mt-4" method="post" action="/handle_db/admin_handle_db/CRUD_MAESTRO/crear_maestro.php">
            <input hidden name="id_usuario">
            <div class="flex flex-col mb-2">
                <label class="text-lg font-semibold">Correo Electronico</label>
                <input type="email" name="email" class="ring-1 ring-[#c2c5cd]" disabled>
            </div>
            <div class="flex flex-col py-4  ">
                <label class="text-lg font-semibold">Nombre(s)</label>
                <input type="text" name="nombre_usuario" class="ring-1 ring-[#c2c5cd]">
                </input>
            </div>
            <div class="flex flex-col py-4  ">
                <label class="text-lg font-semibold">Apellido</label>
                <input type="text" name="apellido" class="ring-1 ring-[#c2c5cd]">
                </input>
            </div>
            <div class="flex flex-col pb-4">
                <label class="text-lg font-semibold">Direccion</label>
                <input type="text" name="direccion" class="ring-1 ring-[#c2c5cd]">
            </div>
            <div class="flex flex-col pb-4">
                <label class="text-lg font-semibold">Fecha de Nacimineto</label>
                <input type="date" name="fecha_nacimiento" class="ring-1 ring-[#c2c5cd]">
            </div>
            <div class="flex flex-col pb-4 border-2 border-white border-b-[#c2c5cd] ">
                <label class="text-lg font-semibold">Materia Asignada</label>
                <input name="fecha_nacimiento" class="ring-1 ring-[#c2c5cd]">
            </div>
            <div class="flex flex-col pb-4 border-2 border-white border-b-[#c2c5cd] ">
                <label class="text-lg font-semibold">Materia Asignada</label>
                <select id="fechaNacimiento" type="date" name="fecha_nacimiento" class="ring-1 ring-[#c2c5cd]">
                    <?php
                    foreach ($materias as $materia) {
                    ?>
                        <option value="<?=$materia['0']?>"><?=$materia["1"]?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="flex justify-end gap-4 py-8">
                <button type="button" class="bg-gray-500 rounded-md text-white px-2 py-1" onclick="modalNuevoClose()">Cerrar</button>
                <button type="submit" class="bg-blue-500 rounded-md text-white px-2 py-1">Guarda Cambios</button>
            </div>
        </form>
    </div>
</div>