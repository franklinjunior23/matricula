<?php 
class Model extends Conexion{
    private $connect ;
    public function __construct(){
        $this->connect= new Conexion();
    }
}


?>