<div id="modalNuevo" class="modal-nuevo justify-center hidden">
<div class="w-[400px] h-[520px] self-center bg-white p-4">
        <h2 class="font-semibold text-4xl p-6  border-2 border-white border-b-[#c2c5cd]">Agregar Clase</h2>
        <form class="flex flex-col mt-4" method="post" action="/handle_db/admin_handle_db/CRUD_CLASES/nueva_clase.php">
        <div class="flex flex-col pb-4 border-2 border-white border-b-[#c2c5cd] ">
                <label class="text-lg font-semibold">Materia Asignada</label>
                <select id="fechaNacimiento" type="date" name="materia_id" class="ring-1 ring-[#c2c5cd]">
                    <?php
                    foreach ($materias as $materia) {
                    ?>
                        <option value="<?=$materia['0']?>"><?=$materia["1"]?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
                <div class="flex flex-col pb-4 border-2 border-white border-b-[#c2c5cd] ">
                    <label class="text-lg font-semibold">Maetro Asignado</label>
                    <select id="maestro_asignado" name="maestro_asignado" class="ring-1 ring-[#c2c5cd]">
                        <?php
                        foreach ($maestros as $maestro) {
                        ?>
                            <option value="<?= $maestro['0'] ?>"><?= $maestro["1"] ?></option>
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