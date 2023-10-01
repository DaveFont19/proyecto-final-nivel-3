function toggleDropdown() {
    let dropdown = document.getElementById("myDropdown");
    if (dropdown.style.display === "block") {
        dropdown.style.display = "none";
    } else {
        dropdown.style.display = "block";
    }
}

window.onclick = function (event) {
    if (!event.target.matches('.cursor-pointer')) {
        let dropdown = document.getElementById("myDropdown");
        if (dropdown.style.display === "block") {
            dropdown.style.display = "none";
        }
    }
}

//este es el modal para editar con el admin

function openModalEditAdmin(event) {
    let modal = document.getElementById('modalEditar');
    modal.style.display = 'flex';

    let fila = event.target.closest('tr');
    let valores = {
        columna1: fila.cells[0].textContent,
        columna2: fila.cells[1].textContent,
        columna3: fila.cells[2].textContent,
        columna4: fila.cells[3].textContent
    };

    document.getElementById('idUsuario').value = valores.columna1;
    document.getElementById('emailUsuario').value = valores.columna2;
    document.getElementById('rolUsuario').value = valores.columna3;
    document.getElementById('estadoUsuario').value = valores.columna4;


}

function closeModalEditAdmin() {
    let modal = document.getElementById('modalEditar');
    modal.style.display = 'none';
}
