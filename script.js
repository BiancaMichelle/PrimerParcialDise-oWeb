let expandedProducto = null;

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

function comprarProducto(productoId) {
    const producto = document.getElementById(productoId);
    if (producto) {
        alert(`Compro: ${producto.querySelector('h3').innerText}` +
              `\nCantidad: ${producto.querySelector('input[type="number"]').value}`);
    }
}