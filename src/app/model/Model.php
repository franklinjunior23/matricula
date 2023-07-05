<?php

namespace App\Model;

use App\Config\Config;
use PDO;

class Model extends Config{
    private $req;
    public function __construct(){
        parent::__construct();
    }
    public function GetAll(){
        /*
         
         $sql = $this->req->query(" SELECT * FROM students ;");
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        print_r( $result);
        */
    }
}

?>
