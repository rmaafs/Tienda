function actualizarCarrito() {
    /*var total = parseInt($("#total-productos-carrito").val()) + 1;
    $("#numero-total-productos-carrito").html(total);
    $("#cuantos-productos-tiene-carrito").html("Tienes " + total + " productos agregados");
    $("#total-productos-carrito").val(total);*/

    
    //alert("Actualice");

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            $("#html-carrito-compras").html(this.responseText);
        }
    };

    //pasa por el metodo get a addArray.php
    xhttp.open("GET", "../php/includes/iconCarritoCompras.php", true);
    xhttp.send();
}