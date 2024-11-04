<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Almacen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="vista/css/style.css">
</head>
<body>
<header>
    <nav>
        <!-- Contenedor para el logo -->
        <div class="logo-container">
            <img src="vista/imagenes/jpg/logo1.jpeg" alt="Logo" class="logo">
        </div>
        <div class="header-paquetes">Paquetes más solicitados</div>

        <!-- Contenedor para los enlaces, con una clase adicional -->
        <div class="nav-group">
        <ul class="nav justify-content-center">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="index.php?i=servicios">Servicios</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="index.php?i=conocenos">Conócenos</a>
    </li>
</ul>

        </div>
    </nav>

    <!-- Bloque de información -->
    <div class="info-group">
        <div class="sales-info">
            <p>Para ventas</p>
            <p class="sales-number">800 245 0825</p>
        </div>
        <div class="link-group">
            <a href="#" class="info-link">Mis viajes</a>
            <a href="index.php?i=login" class="info-link">Iniciar sesión</a>
            <a href="index.php?i=login&action=register" class="info-link">Regístrate</a> <!-- Botón de "Regístrate" -->
        </div>
    </div>

</header>
