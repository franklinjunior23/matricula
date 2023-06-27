<?php
namespace App\Config;
use Exception;
use PDO;
class Conexion{
    private $host = 'localhost';
    private $user = 'root';
    private $password = 'franklin';
    private $db = 'matricula';
    private $conect;
    public function __construct(){
        $conectionString = "mysql:host=".$this->host.";dbname=".$this->db.";charset=utf8";
        try {
            $this->conect = new PDO($conectionString,$this->user,$this->password);

        } catch (Exception $e ) {
            echo "error".$e->getMessage();
        }
    }
}


?>