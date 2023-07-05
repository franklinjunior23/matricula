<?php


namespace App\Config;

use Exception;
use PDO;
class Config
{
    private  $host = 'localhost';
    private $user = 'root';
    private $password = 'franklin';
    private $db = 'matricula';
    private $connect;
    public function __construct()
    {
        $conectionString = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";";
        try {
            $this->connect = new PDO($conectionString, $this->user, $this->password);
            /*
            $sql =$this->connect->query(" SELECT * FROM students ;");
            $req= $sql->fetchAll(PDO::FETCH_ASSOC);
            print_r($req);
            */
        } catch (Exception $e) {
            echo "error" . $e->getMessage();
        }
    }
    public function getConnect()
    {
        return $this->connect;
    }
   
}

?>


