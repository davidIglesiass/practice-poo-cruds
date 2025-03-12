function add() {
    let res = confirm("¿Desea registrar el vuelo?");

    if (res == true) {
        alert("¡Hecho!");
        return true;

    };

    if (res == false) {
        alert("El vuelo no ha sido añadido");
        return false;
    };
}

function deletee() {
    var res = confirm("¿Confirma la eliminacion del vuelo seleccionado?");
    if (res == true) {
        alert("¡El vuelo ha sido eliminado exitosamente!");
        return true;

    };
    if (res == false) {
        return false;
    };
};

function update() {
    var res = confirm("¿confirma la actualizacion de datos del vuelo seleccionado?");
    if (res == true) {
        alert("¡El vuelo ha sido actualizado exitosamente!");
        return true;

    };
    if (res == false) {;
        return false;
    };
};


