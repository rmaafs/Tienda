function alertError(s) {
    swal({
        icon: 'error',
        title: 'Error',
        text: s,
        dangerMode: true,
        buttons: {
            confirm: "Confirmar"
        }
    });
}

function alertSuccess(s) {
    swal({
        icon: 'success',
        title: 'Correcto',
        text: s,
        buttons: {
            confirm: "Confirmar"
        }
    });
}