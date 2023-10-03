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
        columna7: fila.cells[6].textContent,
        columna8: fila.cells[7].textContent,
        columna9: fila.cells[8].textContent
    };

    document.getElementById('idUsuario').value = valores.columna1;
    document.getElementById('nombreUsuario').value = valores.columna2;
    document.getElementById('apellidoUsuario').value = valores.columna3;
    document.getElementById('emailUsuario').value = valores.columna4;
    document.getElementById('direccionUsuario').value = valores.columna5;
    document.getElementById('fechaNacimiento').value = valores.columna6;
    document.getElementById('claseAsignada').value = valores.columna7;
    document.getElementById('inputHidden').value = valores.columna8;
    document.getElementById('id').value = valores.columna9;
}

function modalEditClose() {
    let modalEditar = document.getElementById('modalEditar');
    modalEditar.style.display = 'none';
}
