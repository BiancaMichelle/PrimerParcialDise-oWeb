


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ParcialWeb</title>
    <link rel="stylesheet" href="estilos.css">
    <script src="script.js"></script>
</head>

<body>
    <header>

    </header>
    <nav class="barNav">
        <img src="./imagenes/logo.png" alt="main logo" id="logo">
    </nav>
    <nav class="main-nav">
        <ul class="nav-list">
            <li><a href="index.html">Inicio</a></li>
            <li><a href="formulario.php">Pedidos personalizados</a></li>
            <li><a href="catalogo.php">Catálogo</a></li>
            <li><a href="">Calendario de Lanzamientos</a></li>
        </ul>
    </nav>
    <main>
        <section class="presentacion">
            <h1>Bienvenido a nuestra tienda de stickers personalizados</h1>
        </section>
        <section class="products-grid">
            <div id="producto1" class="producto">
                <div class="producto-info" onclick="mostrarDetalles('producto1')">
                    <img src="imagenes/producto1.png" alt="imagen del producto 1" class="img-producto">
                    <h3>Producto 1</h3>
                    <span class="precio">$1000,00</span>
                </div>
                <div class="descripcion">
                    <p>Descripción del producto 1. Sticker de enredados</p>
                    <ul class="caracteristicas">
                        <li>Resistente al agua</li>
                        <li>Holografico</li>
                        <li>simple</li>
                    </ul>
                    <div class="comprar">
                        <label for="cantidad">Cantidad:</label>
                        <input type="number" id="cantidad-producto1" name="cantidad" min="1" max="10" value="1">
                        <button class="btn" onclick="comprarProducto('producto1')">Comprar</button>
                    </div>
                </div>
            </div>
            <div id="producto2" class="producto">
                <div class="producto-info" onclick="mostrarDetalles('producto2')">
                    <img src="imagenes/producto2.png" alt="imagen del producto 2" class="img-producto">
                    <h3>Producto 2</h3>
                    <span class="precio">$1500,00</span>
                </div>
                <div class="descripcion">
                    <p>Descripción del producto 2. Sticker de enredados</p>
                    <ul class="caracteristicas">
                        <li>Resistente al agua</li>
                        <li>Holografico</li>
                        <li>simple</li>
                    </ul>
                    <div class="comprar">
                        <label for="cantidad">Cantidad:</label>
                        <input type="number" id="cantidad-producto2" name="cantidad" min="1" max="10" value="1">
                        <button class="btn" onclick="comprarProducto('producto2')">Comprar</button>
                    </div>
                </div>
            </div>
            <div id="producto3" class="producto">
                <div class="producto-info" onclick="mostrarDetalles('producto2')">
                    <img src="imagenes/producto4.png" alt="imagen del producto 3" class="img-producto">
                    <h3>Producto 3</h3>
                    <span class="precio">$1200,00</span>
                </div>
                <div class="descripcion">
                    <p>Descripción del producto 3. Sticker de enredados</p>
                    <ul class="caracteristicas">
                        <li>Resistente al agua</li>
                        <li>Holografico</li>
                        <li>simple</li>
                    </ul>
                    <div class="comprar">
                        <label for="cantidad">Cantidad:</label>
                        <input type="number" id="cantidad-producto3" name="cantidad" min="1" max="10" value="1">
                        <button class="btn" onclick="comprarProducto('producto3')">Comprar</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <table>
            <tbody>
                <tr>
                    <td>
                        <p>SERVICIOS</p>
                        <p>_______</p>
                        <ul>
                            <li><a href="">Postales</a></li>
                            <li><a href="">Potcards</a></li>
                            <li><a href="">Vinilos</a></li>
                            <li><a href="">Stickers holograficos</a></li>
                        </ul>
                    </td>
                    <td>
                        <p>PEDIDOS</p>
                        <p>_______</p>
                        <ul>
                            <li><a href="">Seguimiento de envío</a></li>
                            <li><a href="">Encuentros</a></li>
                            <li><a href="catalogo.php">Catalogo</a></li>
                            <li><a href="">Preguntas Frecuentes</a></li>
                        </ul>
                    </td>
                    <td>
                        <p>NUEVOS SERVICIOS</p>
                        <p>_______</p>
                        <ul>
                            <li><a href="">Pancartas</a></li>
                            <li><a href="">Envios</a></li>
                            <li><a href="">Pedidos Personalizados</a></li>
                        </ul>
                    </td>
                    <td>
                        <p>CONTACTO</p>
                        <p>_______</p>
                        <ul>
                            <li><a href="">Atención al cliente</a></li>
                            <li><a href="">Términos y condiciones</a></li>
                            <li><a href="">Declaración General de Privacidad</a></li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="footer-extra">
            <p>&copy; 2025 PrmerParcial Diseño Web. Todos los derechos reservados.</p>
            <p>Contacto: <a href="">michellebianca.2002@gmail..com</a> | Tel: +54 11 1234-5678</p>
            <p>Dirección: Av. Siempre Viva 123</p>
        </div>
    </footer>

</body>

</html>