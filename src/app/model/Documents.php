<?php 
namespace App\Model;
use App\Model\Model;
class Documents extends Model{
    private $table = "Documents";
    public function __construct(){
        parent::__construct();
    }
    public function GetAlls(){
        return $this->GetAll($this->table);}
}
