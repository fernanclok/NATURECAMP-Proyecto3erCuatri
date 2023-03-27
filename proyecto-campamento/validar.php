<?php 
include('conexionDB.php');
class admin extends conexionDB{
        private $correo;
        private $pass;
        /*private $dataset;*/
    
        public function getLOGIN($correo,$pass){
         $result = $this->conectar();
         $sqlpassword="select passAD from admin where correoAD='$correo';";
         $sql= "select * from admin where correoAD ='$correo'";
         echo $sql;
         if($result){
             $dataset=$this->consultar($sqlpassword);
             $fila=mysqli_fetch_assoc($dataset);
             $same=password_verify($pass,$fila['passAD']);

             if($same){
              $dataset=$this->consultar($sql);
             }
         }else{
             $dataset="vacio";
         }
    
         return $dataset;
       }
}
?>