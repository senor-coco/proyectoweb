<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chiapas Tours</title>
    <style>
        /* Estilos para mantener el fondo de la página */
        body {
            background: linear-gradient(to bottom, #2E8B57, #4682B4);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .container img {
            width: 100px;
        }
        .container h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .button {
            display: block;
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .facebook { background: #3b5998; color: white; }
        .google { background: #db4437; color: white; }
        .register, .login { background: #f0f0f0; color: black; }
    </style>
</head>
<body>
    <div class="container">
        <img src="logo.png" alt="Chiapas Tours">
        <h1>Bienvenido a tu próximo viaje</h1>
        <button class="button facebook" onclick="loginWithFacebook()">Acceder con Facebook</button>
        <button class="button google" onclick="loginWithGoogle()">Acceder con Google</button>
        <button class="button register" onclick="showRegister()">Registrate</button>
        <button class="button login" onclick="showLogin()">Iniciar sesión</button>
    </div>

    <script>
        // Función para iniciar sesión con Facebook
        function loginWithFacebook() {
            // Aquí iría la lógica para iniciar sesión con Facebook
            alert('Iniciar sesión con Facebook');
        }

        // Función para iniciar sesión con Google
        function loginWithGoogle() {
            // Aquí iría la lógica para iniciar sesión con Google
            alert('Iniciar sesión con Google');
        }

        // Función para mostrar la pestaña de registro
        function showRegister() {
            document.body.innerHTML = `
                <div class="container">
                    <h1>Registro</h1>
                    <input type="text" placeholder="Nombre" class="button"><br>
                    <input type="email" placeholder="Correo" class="button"><br>
                    <input type="password" placeholder="Contraseña" class="button"><br>
                    <button class="button register" onclick="saveRegister()">Guardar</button>
                </div>
            `;
        }

        // Función para guardar los datos de registro
        function saveRegister() {
            // Aquí iría la lógica para guardar los datos de registro
            alert('Datos de registro guardados');
        }

        // Función para mostrar la pestaña de inicio de sesión
        function showLogin() {
            document.body.innerHTML = `
                <div class="container">
                    <h1>Iniciar sesión</h1>
                    <input type="email" placeholder="Correo" class="button"><br>
                    <input type="password" placeholder="Contraseña" class="button"><br>
                    <button class="button login" onclick="login()">Iniciar sesión</button>
                </div>
            `;
        }

        // Función para iniciar sesión
        function login() {
            // Aquí iría la lógica para iniciar sesión
            alert('Iniciar sesión');
        }
    </script>
</body>
</html>
