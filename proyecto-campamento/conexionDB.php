<?php
class conexionDB{
    private $conection;
    private $HOST;
    private $USER;
    private $PASSW;
    private $DB;
    private $dataset;
    public function __construct(){
        $this->HOST = "127.0.0.1";
        $this->USER ="root";
        $this->PASSW="";
        $this->DB="camping";
    }   
    public function conectar(){
        $this->conection= @mysqli_connect($this->HOST,$this->USER,$this->PASSW,$this->DB);
        if($this->conection){
          
            return true;
        }else{
            return false;
        }
    }  

    public function consultar($sql){
       $this->dataset=mysqli_query($this->conection,$sql);

       if($this->dataset){
         return $this->dataset;
       }else{
        return 'no hay datos';
       }
    }

    public function insertar($sql){
    try{
        if(mysqli_query($this->conection,$sql)>0){
          $newID=$this->conection->insert_id; 
        }else{
          $newID=0; 
        }
      }catch(Exception $e){
        $newID = -1;
        $e->getMessage();
      }
        return $newID;
     }


     public function actualizar($sql){
      if(mysqli_query($this->conection,$sql)>0){
        $check=true;
      }
      else{
        $check = false;
      }
      return $check;
     }
     public function delete($sql){
      if(mysqli_query($this->conection,$sql)){
  }   
  else{   
  }
  return ;
  } 
}
?>