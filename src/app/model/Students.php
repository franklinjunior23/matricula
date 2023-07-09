<?php 

namespace App\Model;

class Students extends Model{
    private $table = "Students";
    public function __construct(){
        parent::__construct();
    }
    public function GetAll($table = null){
        return  parent::getAll($this->table);
    }
    public function GetOne($table=null, $id){
        return parent::GetOne($this->table,$id);
    }
    public function DeletOne($table=null,$id){
        return parent::DeletOne($this->table,$id);
    }
    public function Add($data){
        if(!$data){
            return "no existe nada";
        }
        return $this->Create($this->table,$data);
    }
}

?>