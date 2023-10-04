function modalNuevo() {
    let modalNuevo = document.getElementById('modalNuevo');
    modalNuevo.classList.remove("hidden");
    modalNuevo.classList.add ("flex");
}
function modalNuevoClose() {
    let modalNuevo = document.getElementById('modalNuevo');
    modalNuevo.classList.add ("hidden");
}

function modalEdit(event) {
    let modalEditar = document.getElementById('modalEditar');
    modalEditar.style.display = 'flex';

    let fila = event.target.closest('tr');
    let valores = {
        columna1: fila.cells[0].textContent,
        columna2: fila.cells[1].textContent,
        columna3: fila.cells[2].textContent,
        columna5: fila.cells[4].textContent

    };

    document.getElementById('id_materia_maestro').value = valores.columna1;
    document.getElementById('nombre_materia').value = valores.columna2;
    document.getElementById('maestro_asignado').value = valores.columna5;
}

function modalEditClose() {
    let modalEditar = document.getElementById('modalEditar');
    modalEditar.style.display = 'none';
}

