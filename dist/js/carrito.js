function actualizarCarrito() {
    var total = parseInt($("#total-productos-carrito").val()) + 1;
    $("#numero-total-productos-carrito").html(total);
    $("#cuantos-productos-tiene-carrito").html("Tienes " + total + " productos agregados");
    $("#total-productos-carrito").val(total);
}