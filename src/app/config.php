<?php
class Conexion{
    private $host = 'localhost';
    private $user = 'root';
    private $password = 'franklin';
    private $db = 'matricula';
    private $conect;
    public function __construct(){
        $conectionString = "mysqli:host=".$this->host.";dbname=".$this->db.";charset=utf8";
    }
}

?>