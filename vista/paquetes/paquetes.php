<?php
$mostrarPaquetes = false; // Ocultar paquetes más solicitados si es necesario
require_once('vista/layout/header.php');
require_once('vista/servicio/mostrarServicio.php');


// Estilo dinámico para la burbuja
$headerStyle = "position: absolute; top: 230px; left: 700px; width: 500px; text-align: center; background-color: rgba(240, 240, 240, 0.9); padding: 10px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); font-size: 1.8em; font-weight: bold; color: #333;";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paquetes - Chiapas Tours</title>
    <style>
        /* Fondo principal */
        body {
            background-image: url('vista/imagenes/jpg/fondodepaquetes1.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            margin: 0;
            font-family: Arial, sans-serif;
            color: #333;
        }

        /* Contenedor general */
        .container {
            max-width: 1200px;
            margin: 100px auto 50px;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        /* Contenedor de paquetes */
        .packages-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px; /* Espacio entre tarjetas */
        }

        /* Tarjeta de paquete */
        .package-card {
            width: 300px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 15px;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .package-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .package-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .package-name {
            font-size: 1.3em;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .package-details {
            font-size: 0.9em;
            color: #555;
            margin-bottom: 10px;
            line-height: 1.5;
        }

        .package-price {
            font-size: 1.2em;
            font-weight: bold;
            color: #007bff;
            margin-top: 10px;
        }

        .package-description {
            font-size: 0.85em;
            color: #666;
            margin-top: 10px;
            line-height: 1.4;
        }

        .buy-link {
            display: inline-block;
            margin-top: 15px;
            padding: 8px 15px;
            font-size: 1em;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .buy-link:hover {
            background-color: #0056b3;
        }
        /* Banner inferior dinámico */
.bottom-banner {
    background-image: none; /* Elimina la imagen de fondo previamente establecida */
    background-size: auto; /* Restablece el tamaño del fondo a su valor predeterminado */
    background-repeat: repeat; /* Restablece la repetición del fondo a su valor predeterminado */
    position: fixed;
    transition: all 0.3s ease-in-out; /* Mantiene la transición suave para otros cambios de estilo */
}

    </style>
</head>
<body>
<!-- Burbuja dinámica -->
<div id="paquetes-header-bubble" class="header-bubble" style="<?= $headerStyle; ?>">
    Nuestros Paquetes
</div>

<div class="container">
    <div class="packages-container">
        <?php
        // Lista de paquetes
        $paquetes = [
            [
                "nombre" => "Paquete Caribe Mexicano - Cancún",
                "detalles" => "Hotel: Hotel Caribe Playa<br>Vuelos: Ciudad de México a Cancún<br>Actividades: Snorkel en el arrecife y tour por Chichen Itzá<br>Transporte alternativo: Van privada desde Playa del Carmen<br>Oferta especial: Para grupos de 4, quinta persona gratis.",
                "precio" => "$18,525 MXN por persona",
                "descripcion" => "¡Explora Cancún y vive una aventura inolvidable bajo el sol! Perfecto para grupos que buscan diversión y cultura.",
                "imagen" => "vista/imagenes/jpg/cancún.jpeg"
            ],
            [
                "nombre" => "Aventura en Cabo San Lucas",
                "detalles" => "Hotel: Baja Beach Resort<br>Vuelos: Guadalajara a Los Cabos<br>Actividades: Paseo en barco al Arco y clase de surf<br>Transporte alternativo: Alquiler de coche<br>Oferta especial: 20% descuento en actividades acuáticas.",
                "precio" => "$21,450 MXN por persona",
                "descripcion" => "Desconéctate en las hermosas costas de Cabo con actividades llenas de adrenalina. ¡Ahorra en aventura con nuestro descuento exclusivo!",
                "imagen" => "vista/imagenes/jpg/cabo.jpeg"
            ],
            [
                "nombre" => "Descubrimiento de Chiapas",
                "detalles" => "Hotel: Eco-Hotel Selva<br>Vuelos: Monterrey a Tuxtla Gutiérrez<br>Actividades: Tour por las ruinas de Palenque y rafting en el río Lacanja<br>Transporte alternativo: Autobús de aventura<br>Oferta especial: Paquete familiar, niños viajan gratis.",
                "precio" => "$17,550 MXN por persona",
                "descripcion" => "Vive la magia de Chiapas con un paquete ideal para familias. Explora la historia y la naturaleza con tus seres queridos.",
                "imagen" => "vista/imagenes/jpg/chiapas.jpeg"
            ],
            [
                "nombre" => "Encantos de Guadalajara",
                "detalles" => "Hotel: Hotel Colonial Guadalajara<br>Vuelos: Ciudad de México a Guadalajara<br>Actividades: Tour tequila y visita a Tlaquepaque<br>Transporte alternativo: Renting de autos<br>Oferta especial: Tercer noche gratis.",
                "precio" => "$14,625 MXN por persona",
                "descripcion" => "Descubre la rica cultura de Guadalajara y disfruta de una noche extra gratis. Ideal para amantes del buen vivir.",
                "imagen" => "vista/imagenes/jpg/guadalajara.jpeg"
            ],
            [
                "nombre" => "Explora Oaxaca",
                "detalles" => "Hotel: Oaxaca Real Hotel<br>Vuelos: Tijuana a Oaxaca<br>Actividades: Clase de cocina oaxaqueña y visita a Monte Albán<br>Transporte alternativo: Servicio de shuttle<br>Oferta especial: 10% descuento en tours culturales.",
                "precio" => "$16,575 MXN por persona",
                "descripcion" => "Sumérgete en la historia y la gastronomía de Oaxaca. Aprovecha el descuento en tours culturales y enriquece tu viaje.",
                "imagen" => "vista/imagenes/jpg/oaxaca.jpeg"
            ],
            [
                "nombre" => "Escapada a Puerto Vallarta",
                "detalles" => "Hotel: Vallarta Sun Resort<br>Vuelos: Ciudad de México a Puerto Vallarta<br>Actividades: Paravelismo y tour de snorkel en Los Arcos<br>Transporte alternativo: Mini-van para grupos<br>Oferta especial: Cena gratis en el hotel.",
                "precio" => "$19,500 MXN por persona",
                "descripcion" => "Disfruta de las playas de Puerto Vallarta y una cena gratuita en tu estadía. Perfecto para relajarte y aventurarte en el mar.",
                "imagen" => "vista/imagenes/jpg/puertovallarta.jpeg"
            ],
            [
                "nombre" => "Aventura en Huatulco",
                "detalles" => "Hotel: Huatulco Bay Hotel<br>Vuelos: Puebla a Huatulco<br>Actividades: Buceo en coral y kayak en bahías<br>Transporte alternativo: Bicicletas eléctricas<br>Oferta especial: Descuento del 15% para reservas anticipadas.",
                "precio" => "$16,965 MXN por persona",
                "descripcion" => "Explora las cristalinas aguas de Huatulco y ahorra con nuestra oferta de reserva anticipada. Una aventura acuática te espera.",
                "imagen" => "vista/imagenes/jpg/huatulco.jpeg"
            ],
            [
                "nombre" => "Retiro Espiritual en Tepoztlán",
                "detalles" => "Hotel: Posada del Tepozteco<br>Vuelos: Veracruz a Ciudad de México, luego transporte a Tepoztlán<br>Actividades: Yoga y senderismo al Tepozteco<br>Transporte alternativo: Autobús directo<br>Oferta especial: Sesión de spa gratis.",
                "precio" => "$15,210 MXN por persona",
                "descripcion" => "Renueva tu espíritu en Tepoztlán con sesiones de yoga y un regalo de spa. Un retiro para rejuvenecer cuerpo y mente.",
                "imagen" => "vista/imagenes/jpg/tepoztlán.jpeg"
            ],
            [
                "nombre" => "Lujo en Los Mochis",
                "detalles" => "Hotel: Plaza Inn Hotel<br>Vuelos: Durango a Culiacán, transporte a Los Mochis<br>Actividades: Tour en el Chepe y visita a las Barrancas del Cobre<br>Transporte alternativo: Renta de camioneta SUV<br>Oferta especial: Botella de vino de bienvenida.",
                "precio" => "$22,425 MXN por persona",
                "descripcion" => "Experimenta el lujo y la aventura en Los Mochis. Recibe una cálida bienvenida con una exclusiva botella de vino.",
                "imagen" => "vista/imagenes/jpg/mochis.jpeg"
            ],
            [
                "nombre" => "Descubre Mérida",
                "detalles" => "Hotel: Mérida Blanc Hotel<br>Vuelos: León a Mérida<br>Actividades: Visita a Uxmal y cenotes cercanos<br>Transporte alternativo: Scooters eléctricos<br>Oferta especial: Guía privado gratis en tours.",
                "precio" => "$17,940 MXN por persona",
                "descripcion" => "Explora la histórica Mérida y sus maravillas naturales con la ayuda de un guía privado gratuito. Una escapada cultural única.",
                "imagen" => "vista/imagenes/jpg/mérida.jpeg"
            ]
        ];

        // Generar tarjetas de paquetes dinámicamente
        foreach ($paquetes as $index => $paquete) {
            echo '
            <div class="package-card">
                <img src="' . $paquete["imagen"] . '" alt="' . $paquete["nombre"] . '">
                <div class="package-name">' . $paquete["nombre"] . '</div>
                <div class="package-details">' . $paquete["detalles"] . '</div>
                <div class="package-price">' . $paquete["precio"] . '</div>
                <div class="package-description">' . $paquete["descripcion"] . '</div>
                <a href="vista/paquetes/ventas.php?paquete=' . $index . '" class="buy-link">Ver detalles</a>
            </div>';
        }
        ?>
    </div>
</div>
</body>
</html>

<?php
require_once('vista/layout/footer.php');
?>
