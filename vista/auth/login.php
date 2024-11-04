    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Iniciar Sesión - Chiapas Tours</title>
        <link rel="stylesheet" href="../css/style.css">
        <style>
            /* Fondo de pantalla */
            body {
                background-image: url('vista/imagenes/jpg/fondodepantalla1.jpeg'); /* Imagen de fondo */
                background-size: cover; /* Hace que la imagen cubra toda la pantalla */
                background-position: center; /* Centra la imagen */
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
                font-family: Arial, sans-serif;
            }

            /* Contenedor principal */
            .container {
                background: rgba(255, 255, 255, 0.8); /* Fondo blanco semitransparente */
                padding: 40px;
                border-radius: 15px;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.3); /* Sombra para destacar */
                text-align: center;
                max-width: 400px;
                width: 100%;
            }

            /* Logo en el centro */
            .container img {
                width: 120px;
                margin-bottom: 20px;
            }

            /* Texto de bienvenida */
            .container h1 {
                font-size: 24px;
                font-weight: bold;
                color: black;
                margin-bottom: 30px;
            }

            /* Botones */
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
            .facebook { background: #3b5998; color: white; }
            .google { background: #db4437; color: white; }
            .register, .login { background: #f0f0f0; color: black; }
            .back-btn { background: #555; color: white; } /* Estilo para el botón de regreso */
        </style>
    </head>
    <body>
        <div class="container">
        <img src="vista/imagenes/jpg/logo1.jpeg" alt="Chiapas Tours">
            
            <!-- Mostrar el formulario de registro o inicio de sesión según el parámetro de URL -->
            <?php if (isset($_GET['action']) && $_GET['action'] == 'register') : ?>
                <h1>Registro</h1>
                <input type="email" placeholder="Correo electrónico" class="button"><br>
                <input type="password" placeholder="Contraseña nueva" class="button"><br>
                <input type="password" placeholder="Confirma tu contraseña" class="button"><br>
                <button class="button register" onclick="saveRegister()">Guardar</button>
            <?php else : ?>
                <h1>Bienvenido a tu próximo viaje</h1>
                <button class="button facebook" onclick="loginWithFacebook()">Acceder con Facebook</button>
                <button class="button google" onclick="loginWithGoogle()">Acceder con Google</button>
                <button class="button register" onclick="showRegister()">Registrate</button>
                <button class="button login" onclick="showLogin()">Iniciar sesión</button>
            <?php endif; ?>

            <!-- Botón de regresar a la página principal -->
            <a href="http://localhost/proyectoweb/index.php" class="button back-btn">Regresar a la página principal</a>
        </div>

        <script>
            function loginWithFacebook() {
                alert('Iniciar sesión con Facebook');
            }

            function loginWithGoogle() {
                alert('Iniciar sesión con Google');
            }

            function showRegister() {
                document.body.innerHTML = `
                    <div class="container">
                        <h1>Registro</h1>
                        <input type="email" placeholder="Correo electrónico" class="button"><br>
                        <input type="password" placeholder="Contraseña nueva" class="button"><br>
                        <input type="password" placeholder="Confirma tu contraseña" class="button"><br>
                        <button class="button register" onclick="saveRegister()">Guardar</button>
                        <a href="http://localhost/proyectoweb/index.php" class="button back-btn">Regresar a la página principal</a>
                    </div>
                `;
            }

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
                        <a href="http://localhost/proyectoweb/index.php" class="button back-btn">Regresar a la página principal</a>
                    </div>
                `;
            }

            function login() {
                alert('Iniciar sesión');
            }
        </script>
    </body>
    </html>
