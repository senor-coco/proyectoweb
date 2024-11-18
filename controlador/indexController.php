<?php 
require_once('modelo/indexModel.php');

class IndexController {
    private $indexModel;    

    public function __construct() {
        $this->indexModel = new IndexModel();
    }
    
    // Método para la página principal
    public static function index() {
        require_once("vista/index.php");
    }

    // Método para el login
    public static function login() {
        require_once("vista/auth/login.php");
    }

    // Método para la página "Conócenos"
    public static function conocenos() {
        require_once("vista/conocenos.php");
    }

    // Método para la página "Servicios"
    public static function servicios() {
        require_once('modelo/servicioModel.php'); // Llama al modelo relacionado con servicios
        $servicioModel = new ServicioModel();
        $servicios = $servicioModel->obtenerServicios(); // Obtiene los servicios
        require_once("vista/servicio/mostrarServicio.php"); // Carga la vista de servicios
    }

    // Método para la página "Mis Viajes"
    public static function misviajes() {
        require_once("vista/usuario/misviajes.php"); // Carga la vista "Mis Viajes"
    }
}
?>
