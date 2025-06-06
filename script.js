function mostrarDetalles(productoId) {
    const producto = document.getElementById(productoId);

    if (expandedProducto && expandedProducto !== producto) {
        expandedProducto.classList.remove('expanded');
    }
    producto.classList.toggle('expanded');
    if (producto.classList.contains('expanded')) {
        expandedProducto = producto;
    } else {
        expandedProducto = null;
    }
}