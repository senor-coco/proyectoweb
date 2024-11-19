<?php
$mostrarPaquetes = false; // Ocultar paquetes más solicitados si es necesario
require_once('vista/layout/header.php');

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
            background-image: url('vista/imagenes/jpg/fondodepaquetes1.jpg'); /* Imagen de fondo */
            background-size: cover; /* Escala para cubrir la pantalla */
            background-position: center; /* Centrar la imagen */
            background-attachment: fixed; /* Fija la imagen en su posición */
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
    </style>
</head>
<body>
    <!-- Burbuja dinámica -->
    <div class="header-bubble" style="<?= $headerStyle; ?>">
        Nuestros Paquetes
    </div>
    
    <div class="container">
        <div class="packages-container">
            <!-- Paquete 1 -->
            <div class="package-card">
                <img src="vista/imagenes/jpg/cancún.jpeg" alt="Cancún">
                <div class="package-name">Paquete Caribe Mexicano - Cancún</div>
                <div class="package-details">
                    Hotel: Hotel Caribe Playa<br>
                    Vuelos: Ciudad de México a Cancún<br>
                    Actividades: Snorkel en el arrecife y tour por Chichen Itzá<br>
                    Transporte alternativo: Van privada desde Playa del Carmen<br>
                    Oferta especial: Para grupos de 4, quinta persona gratis.
                </div>
                <div class="package-price">$18,525 MXN por persona</div>
                <div class="package-description">
                    ¡Explora Cancún y vive una aventura inolvidable bajo el sol! Perfecto para grupos que buscan diversión y cultura.
                </div>
            </div>

            <!-- Paquete 2 -->
            <div class="package-card">
                <img src="vista/imagenes/jpg/cabo.jpeg" alt="Cabo San Lucas">
                <div class="package-name">Aventura en Cabo San Lucas</div>
                <div class="package-details">
                    Hotel: Baja Beach Resort<br>
                    Vuelos: Guadalajara a Los Cabos<br>
                    Actividades: Paseo en barco al Arco y clase de surf<br>
                    Transporte alternativo: Alquiler de coche<br>
                    Oferta especial: 20% descuento en actividades acuáticas.
                </div>
                <div class="package-price">$21,450 MXN por persona</div>
                <div class="package-description">
                    Desconéctate en las hermosas costas de Cabo con actividades llenas de adrenalina. ¡Ahorra en aventura con nuestro descuento exclusivo!
                </div>
            </div>

            <!-- Paquete 3 -->
            <div class="package-card">
                <img src="vista/imagenes/jpg/chiapas.jpeg" alt="Chiapas">
                <div class="package-name">Descubrimiento de Chiapas</div>
                <div class="package-details">
                    Hotel: Eco-Hotel Selva<br>
                    Vuelos: Monterrey a Tuxtla Gutiérrez<br>
                    Actividades: Tour por las ruinas de Palenque y rafting en el río Lacanja<br>
                    Transporte alternativo: Autobús de aventura<br>
                    Oferta especial: Paquete familiar, niños viajan gratis.
                </div>
                <div class="package-price">$17,550 MXN por persona</div>
                <div class="package-description">
                    Vive la magia de Chiapas con un paquete ideal para familias. Explora la historia y la naturaleza con tus seres queridos.
                </div>
            </div>

            <!-- Paquete 4 -->
            <div class="package-card">
                <img src="vista/imagenes/jpg/guadalajara.jpeg" alt="Guadalajara">
                <div class="package-name">Encantos de Guadalajara</div>
                <div class="package-details">
                    Hotel: Hotel Colonial Guadalajara<br>
                    Vuelos: Ciudad de México a Guadalajara<br>
                    Actividades: Tour tequila y visita a Tlaquepaque<br>
                    Transporte alternativo: Renting de autos<br>
                    Oferta especial: Tercer noche gratis.
                </div>
                <div class="package-price">$14,625 MXN por persona</div>
                <div class="package-description">
                    Descubre la rica cultura de Guadalajara y disfruta de una noche extra gratis. Ideal para amantes del buen vivir.
                </div>
            </div>

            <!-- Paquete 5 -->
            <div class="package-card">
                <img src="vista/imagenes/jpg/oaxaca.jpeg" alt="Oaxaca">
                <div class="package-name">Explora Oaxaca</div>
                <div class="package-details">
                    Hotel: Oaxaca Real Hotel<br>
                    Vuelos: Tijuana a Oaxaca<br>
                    Actividades: Clase de cocina oaxaqueña y visita a Monte Albán<br>
                    Transporte alternativo: Servicio de shuttle<br>
                    Oferta especial: 10% descuento en tours culturales.
                </div>
                <div class="package-price">$16,575 MXN por persona</div>
                <div class="package-description">
                    Sumérgete en la historia y la gastronomía de Oaxaca. Aprovecha el descuento en tours culturales y enriquece tu viaje.
                </div>
            </div>

            <!-- Paquete 6 -->
            <div class="package-card">
                <img src="vista/imagenes/jpg/puertovallarta.jpeg" alt="Puerto Vallarta">
                <div class="package-name">Escapada a Puerto Vallarta</div>
                <div class="package-details">
                    Hotel: Vallarta Sun Resort<br>
                    Vuelos: Ciudad de México a Puerto Vallarta<br>
                    Actividades: Paravelismo y tour de snorkel en Los Arcos<br>
                    Transporte alternativo: Mini-van para grupos<br>
                    Oferta especial: Cena gratis en el hotel.
                </div>
                <div class="package-price">$19,500 MXN por persona</div>
                <div class="package-description">
                    Disfruta de las playas de Puerto Vallarta y una cena gratuita en tu estadía. Perfecto para relajarte y aventurarte en el mar.
                </div>
            </div>

            <!-- Paquete 7 -->
            <div class="package-card">
                <img src="vista/imagenes/jpg/huatulco.jpeg" alt="Huatulco">
                <div class="package-name">Aventura en Huatulco</div>
                <div class="package-details">
                    Hotel: Huatulco Bay Hotel<br>
                    Vuelos: Puebla a Huatulco<br>
                    Actividades: Buceo en coral y kayak en bahías<br>
                    Transporte alternativo: Bicicletas eléctricas<br>
                    Oferta especial: Descuento del 15% para reservas anticipadas.
                </div>
                <div class="package-price">$16,965 MXN por persona</div>
                <div class="package-description">
                    Explora las cristalinas aguas de Huatulco y ahorra con nuestra oferta de reserva anticipada. Una aventura acuática te espera.
                </div>
            </div>

            <!-- Paquete 8 -->
            <div class="package-card">
                <img src="vista/imagenes/jpg/tepoztlán.jpeg" alt="Tepoztlán">
                <div class="package-name">Retiro Espiritual en Tepoztlán</div>
                <div class="package-details">
                    Hotel: Posada del Tepozteco<br>
                    Vuelos: Veracruz a Ciudad de México, luego transporte a Tepoztlán<br>
                    Actividades: Yoga y senderismo al Tepozteco<br>
                    Transporte alternativo: Autobús directo<br>
                    Oferta especial: Sesión de spa gratis.
                </div>
                <div class="package-price">$15,210 MXN por persona</div>
                <div class="package-description">
                    Renueva tu espíritu en Tepoztlán con sesiones de yoga y un regalo de spa. Un retiro para rejuvenecer cuerpo y mente.
                </div>
            </div>

            <!-- Paquete 9 -->
            <div class="package-card">
                <img src="vista/imagenes/jpg/mochis.jpeg" alt="Los Mochis">
                <div class="package-name">Lujo en Los Mochis</div>
                <div class="package-details">
                    Hotel: Plaza Inn Hotel<br>
                    Vuelos: Durango a Culiacán, transporte a Los Mochis<br>
                    Actividades: Tour en el Chepe y visita a las Barrancas del Cobre<br>
                    Transporte alternativo: Renta de camioneta SUV<br>
                    Oferta especial: Botella de vino de bienvenida.
                </div>
                <div class="package-price">$22,425 MXN por persona</div>
                <div class="package-description">
                    Experimenta el lujo y la aventura en Los Mochis. Recibe una cálida bienvenida con una exclusiva botella de vino.
                </div>
            </div>

            <!-- Paquete 10 -->
            <div class="package-card">
                <img src="vista/imagenes/jpg/mérida.jpeg" alt="Mérida">
                <div class="package-name">Descubre Mérida</div>
                <div class="package-details">
                    Hotel: Mérida Blanc Hotel<br>
                    Vuelos: León a Mérida<br>
                    Actividades: Visita a Uxmal y cenotes cercanos<br>
                    Transporte alternativo: Scooters eléctricos<br>
                    Oferta especial: Guía privado gratis en tours.
                </div>
                <div class="package-price">$17,940 MXN por persona</div>
                <div class="package-description">
                    Explora la histórica Mérida y sus maravillas naturales con la ayuda de un guía privado gratuito. Una escapada cultural única.
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
require_once('vista/layout/footer.php'); // Incluir footer
?>
