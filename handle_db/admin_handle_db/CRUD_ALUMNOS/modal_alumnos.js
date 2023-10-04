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
        columna4: fila.cells[3].textContent,
        columna5: fila.cells[4].textContent,
        columna6: fila.cells[5].textContent,
        columna7: fila.cells[6].textContent
    

    };

    document.getElementById('id_usuario').value = valores.columna1;
    document.getElementById('matricula').value = valores.columna2;
    document.getElementById('nombre_usuario').value = valores.columna3;
    document.getElementById('apellido').value = valores.columna4;
    document.getElementById('email').value = valores.columna5;
    document.getElementById('direccion').value = valores.columna6;
    document.getElementById('fecha_nacimiento').value = valores.columna7;
}

function modalEditClose() {
    let modalEditar = document.getElementById('modalEditar');
    modalEditar.style.display = 'none';
}