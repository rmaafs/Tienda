function alertError(s) {
    swal({
        type: 'error',
        title: 'Error',
        text: s,
        showConfirmButton: false,
        showCancelButton: true,
        cancelButtonColor: '#d33',
        cancelButtonText: 'Entendido'
    });
}

function alertSuccess(s) {
    swal({
        type: 'success',
        title: 'Correcto',
        text: s,
        showConfirmButton: false,
        showCancelButton: true,
        cancelButtonColor: '#00B50C',
        cancelButtonText: 'Entendido'
    });
}