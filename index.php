<?php
require_once('config.php'); // Cargar configuración del sitio
require_once('controlador/indexController.php'); // Cargar el controlador principal

// Verificar si se pasa un parámetro 'i' en la URL
if (isset($_GET['i'])): 
    $metodo = $_GET['i']; // Asignar el parámetro 'i' a la variable $metodo
    
    // Verificar si el método existe en la clase IndexController
    if (method_exists('IndexController', $metodo)):
        IndexController::{$metodo}(); // Llamar al método correspondiente
    else:
        echo "Error: Método no encontrado."; // Mensaje de error si el método no existe
    endif;
else:
    // Si no se pasa el parámetro 'i', cargar la página principal
    IndexController::index();
endif;
?>
