<?php 
use App\Model\Students;

require_once 'vendor/autoload.php';

function InitialPath(){
    return header('location: /MATRICULA');
}
   
if( ! isset($_POST['Confirmacion'])){
   return InitialPath();
}else{
   $estudiante = $_POST['studentid'];
   $data = new Students();
   $res = $data->Get($estudiante);
   if(!$res){
       InitialPath();
   }
}


print_r($res);





?>

