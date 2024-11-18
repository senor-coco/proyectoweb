<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chiapas Tours</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="vista/css/style.css">
    <style>
        /* Estilo para los botones con íconos */
        .nav-link img,
        .info-link img {
            width: 28px; /* Tamaño de los íconos */
            height: 28px;
            margin-right: 10px; /* Espaciado entre el ícono y el texto */
            vertical-align: middle; /* Alineación vertical */
        }

        /* Estilo para el bloque de ventas */
        .sales-info {
            display: flex;
            align-items: center;
            gap: 12px; /* Espaciado entre ícono y texto */
        }

        .sales-info img {
            width: 32px; /* Tamaño del ícono para "Para ventas" */
            height: 32px;
        }

        .sales-info p {
            margin: 0;
            font-size: 14px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>
<header>
    <nav>
        <!-- Contenedor para el logo -->
        <div class="logo-container">
            <img src="vista/imagenes/jpg/logo1.jpeg" alt="Logo" class="logo">
        </div>

        <!-- Contenedor para los enlaces -->
        <div class="nav-group">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">
                        <img src="vista/imagenes/png/inicio.png" alt="Inicio">Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?i=servicios">
                        <img src="vista/imagenes/png/servicio.png" alt="Servicios">Servicios
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?i=conocenos">
                        <img src="vista/imagenes/png/conocenos.png" alt="Conócenos">Conócenos
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Bloque de información -->
    <div class="info-group">
        <div class="sales-info">
            <img src="vista/imagenes/png/paraventas.png" alt="Para ventas">
            <p>Para ventas</p>
            <p class="sales-number">800 245 0825</p>
        </div>
        <div class="link-group">
            <a href="index.php?i=misviajes" class="info-link">
                <img src="vista/imagenes/png/misviajes.png" alt="Mis viajes">Mis viajes
            </a>
            <a href="index.php?i=login" class="info-link">
                <img src="vista/imagenes/png/iniciarsesion.png" alt="Iniciar sesión">Iniciar sesión
            </a>
            <a href="index.php?i=login&action=register" class="info-link">
                <img src="vista/imagenes/png/registrarse.png" alt="Regístrate">Regístrate
            </a>
        </div>
    </div>
</header>
</body>
</html>
