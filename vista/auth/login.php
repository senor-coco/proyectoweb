<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Chiapas Tours</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        body {
            background-image: url('vista/imagenes/jpg/fondodepantalla1.jpeg');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .container {
            background: rgba(255, 255, 255, 0.8);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }
        .container img {
            width: 120px;
            margin-bottom: 20px;
        }
        .container h1 {
            font-size: 24px;
            font-weight: bold;
            color: black;
            margin-bottom: 30px;
        }
        .button {
            display: block;
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .register, .login { background: #f0f0f0; color: black; }
        .back-btn { background: #555; color: white; }
    </style>
</head>
<body>
    <div class="container">
        <img src="vista/imagenes/jpg/logo1.jpeg" alt="Chiapas Tours">
        <?php if (isset($_GET['action']) && $_GET['action'] == 'register') : ?>
            <h1>Registro</h1>
            <input type="text" placeholder="Nombre" class="button"><br>
            <input type="text" placeholder="Apellido" class="button"><br>
            <input type="text" placeholder="Teléfono" class="button"><br>
            <input type="email" placeholder="Correo electrónico" class="button"><br>
            <input type="password" placeholder="Contraseña nueva" class="button"><br>
            <input type="password" placeholder="Confirma tu contraseña" class="button"><br>
            <button class="button register" onclick="saveRegister()">Guardar</button>
        <?php else : ?>
            <h1>Bienvenido a tu próximo viaje</h1>
            <button class="button register" onclick="window.location.href='http://localhost/proyectoweb/index.php?i=login&action=register'">Regístrate</button>
            <button class="button login" onclick="showLogin()">Iniciar sesión</button>
        <?php endif; ?>
        <a href="http://localhost/proyectoweb/index.php" class="button back-btn">Regresar a la página principal</a>
    </div>
    <script>
        function saveRegister() {
            alert('Datos de registro guardados');
        }
        function showLogin() {
            document.body.innerHTML = `
                <div class="container">
                    <h1>Iniciar sesión</h1>
                    <input type="email" placeholder="Correo" class="button"><br>
                    <input type="password" placeholder="Contraseña" class="button"><br>
                    <button class="button login" onclick="login()">Iniciar sesión</button>
                    <a href="http://localhost/proyectoweb/index.php?i=login" class="button back-btn">Regresar a la página login</a>
                </div>
            `;
        }
        function login() {
            alert('Iniciar sesión');
        }
    </script>
</body>
</html>
