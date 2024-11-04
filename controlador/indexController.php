<?php 
require_once('modelo/indexModel.php');
class IndexController {
    private $indexModel;    
    public function __construct() {
        $this->indexModel = new IndexModel();
    }
    
    public static function index() {
        require_once("vista/index.php");
    }

    public static function login() {
        require_once("vista/auth/login.php");
    }
    public static function conocenos() {
        require_once("vista/conocenos.php");
    }
    
}
?>
