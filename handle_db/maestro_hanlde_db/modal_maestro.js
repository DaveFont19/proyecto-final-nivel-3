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
        columna3: fila.cells[2].textContent,
        columna4: fila.cells[3].textContent


    };

    document.getElementById('id_materia_alumnos').value = valores.columna1;
    document.getElementById('calificaciones').value = valores.columna3;
    document.getElementById('mensaje_maestro').value = valores.columna4;
}

function modalEditClose() {
    let modalEditar = document.getElementById('modalEditar');
    modalEditar.style.display = 'none';
}