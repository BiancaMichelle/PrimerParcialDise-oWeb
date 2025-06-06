
<!-- Desarrollar una landing page creativa, atractiva y funcional, 
 pensada para promocionar un
producto o servicio totalmente ficticio y original. 
El enfoque debe combinar diseño visual,
estructura semántica, interactividad en el navegador y 
validación de formularios. -->
<?php
$mensaje = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener y limpiar los datos del formulario
    $nombre = htmlspecialchars(trim($_POST["nombre"] ?? ""));
    $correo = htmlspecialchars(trim($_POST["correo"] ?? ""));
    $telefono = htmlspecialchars(trim($_POST["telefono"] ?? ""));
    $ubicacion = htmlspecialchars(trim($_POST["ubicacion"] ?? ""));
    $tematica = htmlspecialchars(trim($_POST["tematica"] ?? ""));

    // Validar campos obligatorios
    if (empty($nombre) || empty($correo) || empty($telefono) || empty($ubicacion) || empty($tematica)) {
        $mensaje = "Por favor, completa todos los campos correctamente.";
    } else {
        $mensaje = "¡Gracias $nombre! Tu pedido personalizado ha sido recibido.";
    }
}
if (!empty($mensaje)) {
    echo "<div class='mensaje'>$mensaje</div>";
}
?>

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
        <section >
            <h1>Bienvenido a nuestra tienda de stickers personalizados</h1>
        </section>
        <section class="modal">
            <h2>¿Quieres hacer un pedido personalizado?</h2>
            <div class="modal-contenido">
            <form action="" method="POST" id="formCompra" class="formulario">
                <div class="datos">
                    <label for="nombre">Nombre completo:</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre completo" required>
                </div>
                <div class="datos">
                    <label for="correo">Correo electrónico:</label>
                    <input type="email" id="correo" name="correo" placeholder="Ingrese su correo electrónico" required>
                </div>
                    <div class="datos">
                        <label for="telefono">Teléfono:</label>
                    <input type="tel" id="telefono" name="telefono" placeholder="Ingrese su número de teléfono"
                        required>

                    </div>

                    <div class="datos">
                        <label for="ubicacion">Ubicación:</label>
                    <input type="text" id="ubicacion" name="ubicacion" placeholder="Ingrese su ubicación" required>

                    </div>
                    <div class="datos">
                        <select name="tematica" id="">
                        <option value="disney" name="tematica">disney</option>
                        <option value="marvel" name="tematica">marvel</option>
                        <option value="footbal" name="tematica">footbal</option>
                        <option value="anime" name="tematica">anime</option>
                    </select>
                    </div>
                    
                    <button type="submit" id="confirmarCompra">Realizar compra</button>
            </form>
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