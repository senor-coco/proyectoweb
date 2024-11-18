<?php
$mostrarPaquetes = false;
require_once('vista/layout/header.php');
?>

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

        /* Contenedor general */
        .container {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            margin-top: 100px; /* Espaciado del header */
            padding: 20px;
        }

        /* Barra lateral fija */
        .sidebar {
            width: 280px; /* Ancho mayor */
            position: fixed; /* Fijo al lado izquierdo */
            top: 150px; /* Espaciado desde la parte superior */
            left: 20px;
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        /* Botones de la barra lateral */
        .sidebar .icon-button {
            display: flex;
            align-items: center;
            padding: 15px;
            margin: 20px 0; /* Más espacio entre botones */
            background: #f5f5f5;
            border: 1px solid #ddd;
            border-radius: 8px;
            text-align: left;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
            text-decoration: none;
            color: #333;
            font-size: 1.2em; /* Tamaño de texto más grande */
        }

        .sidebar .icon-button img {
            width: 60px; /* Tamaño mayor de los íconos */
            height: 60px;
            margin-right: 15px;
        }

        .sidebar .icon-button:hover {
            background: #e0e0e0;
            transform: translateY(-3px); /* Efecto de elevación */
        }

        /* Contenido principal */
        .main-content {
            flex: 1;
            margin-left: 320px; /* Ajuste por el ancho de la barra lateral */
            padding: 30px;
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

        /* Botón de regresar */
        .back-btn-container {
            text-align: center;
            margin-top: 20px;
        }

        .back-btn {
            display: inline-block;
            padding: 12px 25px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-size: 1.1em;
            font-weight: bold;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
        }

        .back-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Barra lateral fija -->
        <div class="sidebar">
            <a href="#" class="icon-button">
                <img src="vista/imagenes/png/paquetes.png" alt="Paquetes">
                <span>Paquetes</span>
            </a>
            <a href="#" class="icon-button">
                <img src="vista/imagenes/png/hoteles.png" alt="Hoteles">
                <span>Hoteles</span>
            </a>
            <a href="#" class="icon-button">
                <img src="vista/imagenes/png/vuelos.png" alt="Vuelos">
                <span>Vuelos</span>
            </a>
            <a href="#" class="icon-button">
                <img src="vista/imagenes/png/actividades.png" alt="Actividades">
                <span>Actividades</span>
            </a>
            <a href="#" class="icon-button">
                <img src="vista/imagenes/png/trasporte.png" alt="Transporte">
                <span>Transporte</span>
            </a>
        </div>

        <!-- Botón de regresar a la página principal -->
        <div class="back-btn-container">
            <a href="index.php" class="back-btn">Regresar a la página principal</a>
        </div>
    </div>

    <!-- Banner en la parte inferior de la página -->
    <div class="bottom-banner"></div>
</body>
</html>

<?php 
require_once('vista/layout/footer.php'); // Incluye el pie de página
?>
