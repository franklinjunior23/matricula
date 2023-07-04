<?php

namespace App\Config;

use Exception;
use PDO;

class Conexion
{
    private  $host = 'localhost';
    private $user = 'root';
    private $password = 'franklin';
    private $db = 'matricula';
    private $connect;
    private $conectionString;
    public function __construct()
    {
        $this->conectionString = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=utf8";
        try {
            $this->connect = new PDO($this->conectionString, $this->user, $this->password);
            
        } catch (Exception $e) {
            echo "error" . $e->getMessage();
        }
    }
    public function getConnect(){
        return $this->connect;
    }
}
