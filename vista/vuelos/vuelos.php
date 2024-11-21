<?php
$mostrarPaquetes = false; // Ocultar paquetes más solicitados si es necesario
require_once('vista/layout/header.php'); // Incluir header
require_once('vista/servicio/mostrarServicio.php');

// Estilo dinámico para la burbuja
$headerStyle = "position: absolute; top: 230px; left: 700px; width: 500px;";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vuelos - Chiapas Tours</title>
    <style>
    /* Fondo principal con la imagen de "fondodevuelos" */
    body {
        background-image: url('vista/imagenes/jpg/fondodevuelos.jpg'); /* Imagen de fondo */
        background-size: cover; /* Escala para cubrir la pantalla */
        background-position: center; /* Centrar la imagen */
        background-attachment: fixed; /* Fija la imagen en su posición */
        margin: 0;
        font-family: Arial, sans-serif;
        color: #333; /* Color de texto predeterminado */
    }

    /* Estilo de la burbuja dinámica que aparece en la parte superior */
    .header-bubble {
        background-color: rgba(240, 240, 240, 0.9); /* Fondo semitransparente */
        border-radius: 10px; /* Bordes redondeados */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Sombra para darle profundidad */
        padding: 10px; /* Espaciado interno */
        text-align: center; /* Centrar texto */
        font-size: 1.8em; /* Tamaño de texto grande */
        font-weight: bold; /* Texto en negritas */
        color: #333; /* Color del texto */
    }

    /* Contenedor principal para las tarjetas */
    .container {
        max-width: 1200px; /* Ancho máximo del contenedor */
        margin: 100px auto 50px; /* Márgenes superiores, inferiores y centrado horizontal */
        background-color: rgba(255, 255, 255, 0.9); /* Fondo blanco semitransparente */
        padding: 20px; /* Espaciado interno */
        border-radius: 10px; /* Bordes redondeados */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Sombra para el contenedor */
        text-align: center; /* Centrar contenido dentro del contenedor */
    }

    /* Contenedor de las tarjetas de aerolíneas */
    .airlines-container {
        display: flex; /* Flexbox para organizar las tarjetas */
        flex-wrap: wrap; /* Permitir que las tarjetas se muevan a la siguiente fila si es necesario */
        justify-content: center; /* Centrar tarjetas horizontalmente */
        gap: 20px; /* Espaciado entre tarjetas */
    }

    /* Estilo individual de cada tarjeta */
    .airline-card {
        width: 200px; /* Ancho fijo de la tarjeta */
        background-color: #fff; /* Fondo blanco */
        border-radius: 10px; /* Bordes redondeados */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Sombra para la tarjeta */
        padding: 15px; /* Espaciado interno */
        text-align: center; /* Centrar contenido */
        transition: transform 0.3s, box-shadow 0.3s; /* Transiciones suaves en hover */
    }

    /* Efecto hover para las tarjetas */
    .airline-card:hover {
        transform: translateY(-5px); /* Eleva la tarjeta al pasar el cursor */
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2); /* Aumenta la sombra al pasar el cursor */
    }

    /* Imagen dentro de cada tarjeta */
    .airline-card img {
        width: 100%; /* Ancho completo de la tarjeta */
        height: 120px; /* Altura fija */
        object-fit: cover; /* Ajustar imagen sin distorsión */
        border-radius: 10px; /* Bordes redondeados */
        margin-bottom: 10px; /* Espaciado inferior */
    }

    /* Nombre de la aerolínea */
    .airline-name {
        font-size: 1.2em; /* Tamaño de texto mediano */
        font-weight: bold; /* Texto en negritas */
        color: #333; /* Color del texto */
    }

    /* Banner inferior dinámico */
    .bottom-banner {
        background-image: none; /* Elimina cualquier imagen previamente asignada */
        background-size: auto; /* Tamaño de fondo predeterminado */
        background-repeat: repeat; /* Repetir fondo si es necesario */
        position: fixed; /* Fijo en la posición inferior */
        transition: all 0.3s ease-in-out; /* Transiciones suaves */
    }
</style>

</head>
<body>
    <!-- Burbuja dinámica -->
    <div class="header-bubble" style="<?= $headerStyle; ?>">
        Aerolíneas Asociadas
    </div>

    <div class="container">
        <div class="airlines-container">
            <!-- Viva Aerobus -->
            <div class="airline-card">
                <img src="vista/imagenes/jpg/vivaaerobus.jpg" alt="Viva Aerobus">
                <div class="airline-name">Viva Aerobus</div>
            </div>

            <!-- Magnicharters -->
            <div class="airline-card">
                <img src="vista/imagenes/jpg/magnicharters.jpg" alt="Magnicharters">
                <div class="airline-name">Magnicharters</div>
            </div>

            <!-- TAR Aerolíneas -->
            <div class="airline-card">
                <img src="vista/imagenes/jpg/taraerolíneas.jpg" alt="TAR Aerolíneas">
                <div class="airline-name">TAR Aerolíneas</div>
            </div>

            <!-- Aeromar -->
            <div class="airline-card">
                <img src="vista/imagenes/jpg/aeromar.jpg" alt="Aeromar">
                <div class="airline-name">Aeromar</div>
            </div>

            <!-- Interjet -->
            <div class="airline-card">
                <img src="vista/imagenes/jpg/interjet.jpeg" alt="Interjet">
                <div class="airline-name">Interjet</div>
            </div>

            <!-- Volaris -->
            <div class="airline-card">
                <img src="vista/imagenes/jpg/volaris.jpg" alt="Volaris">
                <div class="airline-name">Volaris</div>
            </div>

            <!-- Aeroméxico -->
            <div class="airline-card">
                <img src="vista/imagenes/jpg/aeroméxico.jpg" alt="Aeroméxico">
                <div class="airline-name">Aeroméxico</div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
require_once('vista/layout/footer.php'); // Incluir footer
?>
