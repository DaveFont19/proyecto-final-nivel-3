<div id="modalEditar" class="modal-editar justify-center hidden">
    <div class="w-[400px] h-[520px] self-center bg-white p-4">
        <h2 class="font-semibold text-4xl p-6  border-2 border-white border-b-[#c2c5cd]">Editar Clase</h2>
        <form class="flex flex-col mt-4" method="post" action="/handle_db/admin_handle_db/CRUD_CLASES/editar_clases.php">
            <input id='id_materia_maestro' hidden name="id_materia_maestro">
            <div class="flex flex-col mb-2">
                <label class="text-lg font-semibold">Nombre de la Clase</label>
                <input id="nombre_materia" type="text" name="materia_id" class="ring-1 ring-[#c2c5cd]">
            </div>
            <div class="flex flex-col pb-4 border-2 border-white border-b-[#c2c5cd] ">
                <label class="text-lg font-semibold">Maetro Asignado</label>
                <select id="maestro_asignado" name="maestro_asignado" class="ring-1 ring-[#c2c5cd]">
                    <?php
                    foreach ($maestros as $maestro) {
                    ?>
                        <option value="<?=$maestro['0']?>"><?=$maestro["1"]?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="flex justify-end gap-4 py-8">
                <button type="button" onclick="modalEditClose()" class="bg-gray-500 rounded-md text-white px-2 py-1">Cerrar</button>
                <button type="submit" class="bg-blue-500 rounded-md text-white px-2 py-1">Guarda Cambios</button>
            </div>
        </form>
    </div>
</div>