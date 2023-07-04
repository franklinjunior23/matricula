<?php

namespace App\Model;
use App\Config\Conexion;
use PDO;

class Model extends Conexion{
    private $name;
    private $connect ;
    public function __construct($name){
        parent::__construct();
        $this->connect = new Conexion();
        $this->name=$name;
    }
    public function GetAll(){
        $sql = $this->connect->getConnect()->query("SELECT * FROM $this->name");
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
