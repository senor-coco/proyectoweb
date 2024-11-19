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
                    Actividades: Snorkel y tour a Chichen Itzá<br>
                    Oferta: Quinta persona gratis
                </div>
                <div class="package-price">$18,525 MXN</div>
            </div>

            <!-- Paquete 2 -->
            <div class="package-card">
                <img src="vista/imagenes/jpg/cabo.jpeg" alt="Cabo San Lucas">
                <div class="package-name">Aventura en Cabo San Lucas</div>
                <div class="package-details">
                    Hotel: Baja Beach Resort<br>
                    Vuelos: Guadalajara a Los Cabos<br>
                    Actividades: Paseo al Arco y surf<br>
                    Oferta: 20% en actividades acuáticas
                </div>
                <div class="package-price">$21,450 MXN</div>
            </div>

            <!-- Paquete 3 -->
            <div class="package-card">
                <img src="vista/imagenes/jpg/chiapas.jpeg" alt="Chiapas">
                <div class="package-name">Descubrimiento de Chiapas</div>
                <div class="package-details">
                    Hotel: Eco-Hotel Selva<br>
                    Vuelos: Monterrey a Tuxtla<br>
                    Actividades: Palenque y rafting<br>
                    Oferta: Niños viajan gratis
                </div>
                <div class="package-price">$17,550 MXN</div>
            </div>

            <!-- Paquete 4 -->
            <div class="package-card">
                <img src="vista/imagenes/jpg/guadalajara.jpeg" alt="Guadalajara">
                <div class="package-name">Encantos de Guadalajara</div>
                <div class="package-details">
                    Hotel: Hotel Colonial<br>
                    Vuelos: CDMX a Guadalajara<br>
                    Actividades: Tour tequila<br>
                    Oferta: Tercer noche gratis
                </div>
                <div class="package-price">$14,625 MXN</div>
            </div>

            <!-- Paquete 5 -->
            <div class="package-card">
                <img src="vista/imagenes/jpg/oaxaca.jpeg" alt="Oaxaca">
                <div class="package-name">Explora Oaxaca</div>
                <div class="package-details">
                    Hotel: Oaxaca Real<br>
                    Vuelos: Tijuana a Oaxaca<br>
                    Actividades: Cocina y Monte Albán<br>
                    Oferta: 10% en tours
                </div>
                <div class="package-price">$16,575 MXN</div>
            </div>

            <!-- Paquete 6 -->
            <div class="package-card">
                <img src="vista/imagenes/jpg/puertovallarta.jpeg" alt="Puerto Vallarta">
                <div class="package-name">Escapada a Puerto Vallarta</div>
                <div class="package-details">
                    Hotel: Vallarta Sun Resort<br>
                    Vuelos: CDMX a Puerto Vallarta<br>
                    Actividades: Paravelismo y snorkel<br>
                    Oferta: Cena gratis
                </div>
                <div class="package-price">$19,500 MXN</div>
            </div>

            <!-- Paquete 7 -->
            <div class="package-card">
                <img src="vista/imagenes/jpg/huatulco.jpeg" alt="Huatulco">
                <div class="package-name">Aventura en Huatulco</div>
                <div class="package-details">
                    Hotel: Huatulco Bay<br>
                    Vuelos: Puebla a Huatulco<br>
                    Actividades: Buceo y kayak<br>
                    Oferta: 15% anticipadas
                </div>
                <div class="package-price">$16,965 MXN</div>
            </div>

            <!-- Paquete 8 -->
            <div class="package-card">
                <img src="vista/imagenes/jpg/tepoztlán.jpeg" alt="Tepoztlán">
                <div class="package-name">Retiro Espiritual en Tepoztlán</div>
                <div class="package-details">
                    Hotel: Posada Tepozteco<br>
                    Vuelos: Veracruz a CDMX<br>
                    Actividades: Yoga y senderismo<br>
                    Oferta: Spa gratis
                </div>
                <div class="package-price">$15,210 MXN</div>
            </div>

            <!-- Paquete 9 -->
            <div class="package-card">
                <img src="vista/imagenes/jpg/mochis.jpeg" alt="Los Mochis">
                <div class="package-name">Lujo en Los Mochis</div>
                <div class="package-details">
                    Hotel: Plaza Inn<br>
                    Vuelos: Durango a Culiacán<br>
                    Actividades: Tour en el Chepe<br>
                    Oferta: Vino de bienvenida
                </div>
                <div class="package-price">$22,425 MXN</div>
            </div>

            <!-- Paquete 10 -->
            <div class="package-card">
                <img src="vista/imagenes/jpg/mérida.jpeg" alt="Mérida">
                <div class="package-name">Descubre Mérida</div>
                <div class="package-details">
                    Hotel: Mérida Blanc<br>
                    Vuelos: León a Mérida<br>
                    Actividades: Uxmal y cenotes<br>
                    Oferta: Guía privado
                </div>
                <div class="package-price">$17,940 MXN</div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
require_once('vista/layout/footer.php'); // Incluir footer





