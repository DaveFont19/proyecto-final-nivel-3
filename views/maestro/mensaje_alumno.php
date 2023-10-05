<div id="modalEditar" class="modal-editar justify-center hidden">
    <div class="w-[400px] h-[520px] self-center bg-white p-4">
        <h2 class="font-semibold text-4xl p-6  border-2 border-white border-b-[#c2c5cd]">Mensaje a Alumno</h2>
        <form class="flex flex-col mt-4" method="post" action="/handle_db/maestro_hanlde_db/mensaje_alumno.php">
            <input id='id_materia_alumnos' hidden name="id_materia_alumnos">
            <div class="flex flex-col mb-2">
                <label class="text-lg font-semibold">Mensaje a Alumno</label>
                <input id="mensaje_maestro" type="text" name="mensaje_maestro" class="ring-1 ring-[#c2c5cd] h-40">
            </div>
            <div class="flex flex-col mb-2">
                <label class="text-lg font-semibold">calificaciones Alumno</label>
                <input id="calificaciones" type="text" name="calificaciones" class="ring-1 ring-[#c2c5cd]">
            </div>
            <div class="flex justify-end gap-4 py-8">
                <button type="button" onclick="modalEditClose()" class="bg-gray-500 rounded-md text-white px-2 py-1">Cerrar</button>
                <button type="submit" class="bg-blue-500 rounded-md text-white px-2 py-1">Guarda Cambios</button>
            </div>
        </form>
    </div>
</div>