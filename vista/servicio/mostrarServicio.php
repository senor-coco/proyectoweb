<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios - Chiapas Tours</title>
    <style>
        /* Fondo principal */
        body {
            background-image: url('vista/imagenes/jpg/aeropuerto.jpg');
            background-size: cover;
            background-position: center;
            margin: 0;
            font-family: Arial, sans-serif;
            color: #333;
        }

        /* Contenedor de la página */
        .container {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
            justify-content: space-between;
        }

        /* Columna izquierda */
        .sidebar {
            width: 200px;
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            position: fixed;
            top: 150px;
            left: 20px;
        }

        .sidebar .icon-button {
            display: flex;
            align-items: center;
            padding: 10px;
            margin: 10px 0;
            background: #f0f0f0;
            border: none;
            border-radius: 5px;
            text-align: left;
            cursor: pointer;
            transition: background 0.3s;
            text-decoration: none;
            color: #333;
        }

        .sidebar .icon-button img {
            width: 30px;
            height: 30px;
            margin-right: 10px;
        }

        .sidebar .icon-button:hover {
            background: #ddd;
        }

        /* Contenido principal */
        .main-content {
            margin-left: 240px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            margin-top: 20px;
            text-align: center;
        }

        /* Banner en la parte inferior */
        .bottom-banner {
            background-image: url('vista/imagenes/jpg/banerdeabajo.jpg');
            background-size: cover;
            background-position: center;
            height: 200px;
            border-top: 5px solid #333;
            margin-top: 30px;
        }

        /* Encabezado y footer */
        header, footer {
            background-color: rgba(217, 217, 217, 0.9);
            text-align: center;
            padding: 10px;
            color: #333;
            font-weight: bold;
        }

        .footer-text {
            color: black;
        }
    </style>
</head>
<body>
    <header>
        <h1>Chiapas Tours - Servicios</h1>
    </header>

    <div class="container">
        <!-- Barra lateral izquierda -->
        <div class="sidebar">
            <a href="#" class="icon-button">
                <img src="vista/imagenes/png/paquetes.png" alt="Paquetes">
                Paquetes
            </a>
            <a href="#" class="icon-button">
                <img src="vista/imagenes/png/hoteles.png" alt="Hoteles">
                Hoteles
            </a>
            <a href="#" class="icon-button">
                <img src="vista/imagenes/png/vuelos.png" alt="Vuelos">
                Vuelos
            </a>
            <a href="#" class="icon-button">
                <img src="vista/imagenes/png/actividades.png" alt="Actividades">
                Actividades
            </a>
            <a href="#" class="icon-button">
                <img src="vista/imagenes/png/trasporte.png" alt="Transporte">
                Transporte
            </a>
        </div>

        <!-- Contenido principal -->
        <div class="main-content">
            <h2>Bienvenido a nuestros Servicios</h2>
            <p>Explore nuestros paquetes de viaje, opciones de hoteles, vuelos y mucho más para hacer de su experiencia algo inolvidable.</p>
        </div>
        
        <!-- Banner en la parte inferior de la página -->
        <div class="bottom-banner"></div>
    </div>

    <footer>
        <p class="footer-text">Redes Sociales</p>
        <p class="footer-text">© 2024 Chiapas Tours. Todos los derechos reservados.</p> 
    </footer>
</body>
</html>
