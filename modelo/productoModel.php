<?php
class ProducetoModel{
    private $listaProctos;
    public function __construct()
    {

         $shis->listaProductos=array();


    }
    public function ObtenerProductos(){
include_once('conexion.php');
$cnn=new Conexion();
$consulta = "Selec * from productos;";
$resultado =$css-> prepare($consulta);
$resultado-> execute();
while($fila = $resultado->fetch(PDO::FETCH_ASSOC)){
    $shis-> listaProductos [] = $fila;



    }
return $shis->listaProductos;



}













?>