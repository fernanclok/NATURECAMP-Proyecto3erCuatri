<?php 
include_once('conexionDB.php');

class campista extends conexionDB{

//-------------------------------INSERSION CAMPISTA------------------------------------------------->
        private $codigo;
        private $grupo;
        private $nombrePila;
        private $apellidoPat;
        private $apellidoMat;
        private $edad;
        private $telefono;
        private $correo;
        private $estado;
        private $ciudad;

      public function setCampista($nombrePila,$apellidoPat,$apellidoMat,$edad,$telefono,$correo,$estado,$newC){
        $sql= "insert into campista(nombrePila,apellidoPat,apellidoMat,edad,telefono,correo,estado,ciudad) values('".$nombrePila."','".$apellidoPat."','".$apellidoMat."','".$edad."','".$telefono."','".$correo."','".$estado."','".$newC."')";
        $result = $this->conectar();
         $newID= $this -> insertar($sql);
         return $newID;
      }
//------------------------------INSERCION CONTACTO DE EMERGENCIA------------------------------------->
      private $numero;
      private $nombrePila2;
      private $apellidopat2;
      private $apellidoMat2;
      private $ciudad2;
      private $estado2;
      private $telefono2;
      public function setcont_emergencia($nombrePila2,$apellidoPat2,$apellidoMat2,$telefono2,$newC,$estado2){
         $sql= "insert into cont_emergencia(nombrePila,apellidoPat,apellidoMat,telefono,ciudad,estado) values('".$nombrePila2."','".$apellidoPat2."','".$apellidoMat2."','".$telefono2."','".$newC."','".$estado2."')";
         $result = $this->conectar();
         return $this -> insertar($sql);
       }
//----------------------------Insersion del grupo---------------------------------------------------->
        public function setGC($newCD,$grupo){
          $sql= "insert into campista_grupo(campista,grupo) values('".$newCD."','".$grupo."')";
          $result = $this->conectar();
          return $this -> insertar($sql);
        }
//-----------------------------INSERSION CONTACTO RELACIONADO CON CAMPISTA--------------------------->
       public function setcampista_contacto($newCD, $newcodigo){
         $sql= "insert into campista_contacto(campista,contacto) values(".$newCD.",".$newcodigo.")";
         $result = $this->conectar();
          if($result){
           $this->insertar($sql);
          }
       }
//--------------------------------------------INSERCION DATOS MEDICOS----------------------------------->
       public function setcampista_Medicos($newCD,$newDM){
         $sql= "insert into campista_datos(campista,datos) values(".$newCD.",'".$newDM."')";
         $result = $this->conectar();
          if($result){
           $this->insertar($sql);
          }
       }
        public function setcampista_Medico($newCD,$newDM){
         $sql= "insert into campista_datos(campista,datos) values(".$newCD.",'".$newDM."')";
         $result = $this->conectar();
          if($result){
           $this->insertar($sql);
          }
       }
       public function setcampista_Med($newCD,$newDM){
         $sql= "insert into campista_datos(campista,datos) values(".$newCD.",'".$newDM."')";
         $result = $this->conectar();
          if($result){
           $this->insertar($sql);
          }
       } 
//------------------------INSERT CIUDAD/ESTADO-------------------------------------------------------->
   public function setCiudad($ciudad3,$estado3){
      $sql="insert into ciudades(nombre,estado) values('".$ciudad3."','".$estado3."')";
      $result = $this->conectar();
            return $this -> insertar($sql);
   }  
//--------------------------------Funciones Administracion Campista------------------------------------------->
      /*Consulta campistas*/
      public function getCAMPISTA(){
      $result = $this->conectar();
      if($result){
         $dataset=$this->consultar("call campistaGrupos;");
      }else{
         echo "no hay datos ";
         $dataset="vacio";
      }
      return $dataset;
      }
      /*INSERSION CAMPISTA <DIRECTAMENTE>*/
      public function setCampistaAdmin($nombrePil,$apellidoPa,$apellidoMa,$age,$cel,$email,$estados,$ciudadCAM){
         $sql= "insert into campista(nombrePila,apellidoPat,apellidoMat,edad,telefono,correo,estado,ciudad) values('".$nombrePil."','".$apellidoPa."','".$apellidoMa."','".$age."','".$cel."','".$email."','".$estados."','".$ciudadCAM."')";
         $result = $this->conectar();
          return $this -> insertar($sql);
      }

      /*ASIGNAR GRUPO A CAMPISTA SOLITO*/
      public function setCamGRUPO($cam,$grup){
        $sql= "insert into campista_grupo(campista,grupo) values('".$cam."','".$grup."');";
        $result = $this->conectar();
         return $this -> insertar($sql);
     }
      /*BORRAR CAMPISTA*/
      public function setBorrar($num){
         $sql="delete from campista where codigo='".$num."';";
         $result= $this->conectar();
          if($result){ 
              $this->delete($sql); 
         $check=true;
         }
         else{
           $check=false;
         }
         return$check;
         }
         public function delCACO($num){
          $sql="delete from campista_contacto where campista='".$num."';";
          $result= $this->conectar();
           if($result){ 
               $this->delete($sql); 
          $check=true;
          }
          else{
            $check=false;
          }
          return$check;
          }
         public function delBorrar($num){
            $sql="delete from campista_grupo where campista='".$num."';";
            $result= $this->conectar();
             if($result){ 
                 $this->delete($sql); 
            $check=true;
            }
            else{
              $check=false;
            }
            return$check;
            }
            public function delBorrado($num){
              $sql="delete from campista_datos where campista='".$num."';";
              $result= $this->conectar();
               if($result){ 
                   $this->delete($sql); 
            
              $check=true;
              }
              else{
                $check=false;
              }
              return$check;
              }
            public function delBorra($num){
               $sql="delete from campista_datos where campista='".$num."';";
               $result= $this->conectar();
                if($result){ 
                    $this->delete($sql); 
             
               $check=true;
               }
               else{
                 $check=false;
               }
               return$check;
               }
            public function actCampista($codigo,$nombre,$apellidoPat,$apellidoMat,$edades,$correo,$telefonos,$Estado,$ciudades){
               $sql="update campista set  nombrePila='".$nombre."', apellidoPat='".$apellidoPat."', apellidoMat='".$apellidoMat."', edad='".$edades."', telefono='".$telefonos."', correo='".$correo."', ciudad='".$ciudades."', estado='".$Estado."' where codigo= '".$codigo."';";
               $result = $this->conectar();
               if($result){
                 $this->actualizar($sql);
                 $check=true;
             }
             else{
                 $chec=false;
               }
               return $check;
             }
/*------------------------Funciones Administrador---------------------------------*/
    public function getAdmin(){
      $result = $this->conectar();
      if($result){
          $dataset=$this->consultar("call CONSULTARADMINS;");

      }else{
          echo "no hay datos ";
          $dataset="vacio";
      }
      return $dataset;
    }   

    public function setAdmin($nom, $pat, $mat, $email, $pass)
    {
      $sql="insert into admin(nombrePila, apellidoPat, apellidoMat, correoAD, passAD) values ('".$nom."', '".$pat."', '".$mat."', '".$email."','".$pass."');";
      $result = $this->conectar();
      if($result){
        $newid=$this->insertar($sql);
        }
      else{
          $newid = 0;
      }
      return $newid;
    }

    public function updAdmin($id,$nom, $pat, $mat, $email, $pass)
    {
      $sql="update admin set nombrePila='".$nom."', apellidoPat='".$pat."', apellidoMat='".$mat."', correoAD='".$email."', passAD='".$pass."' where numAD='".$id."';";

        $result = $this->conectar();
        if($result){
        $this->actualizar($sql);
          $check = true;
      }
      else{
          $check = false;
      }
      return $check;
    } 

    public function delAdmin($id)
    {
      $sql="delete from admin where numAD='".$id."';";
    
        $result = $this->conectar();
        if($result){
        $this->delete($sql);
          $check = true;
      }
      else{
          $check = false;
      }
      return $check;
    } 
/*------------------------------------------Funciones Instructores----------------------------*/
  public function getINSTRUCTOR(){
    $result = $this->conectar();
    if($result){
        $dataset=$this->consultar("call CONSULTARINSTRUCTORES;");
    }else{
        echo "no hay datos ";
        $dataset="vacio";
    }
    return $dataset;
  } 
  
  /*------------------------INSERTAR INSTRUCTOR-------------------------------*/
  public function setINST($nombre,$apeP,$apeM,$age,$anios){
    $sql="insert into instructores(nombrePila, apellidoPat, apellidoMat, edad, años_experiencia) values ('".$nombre."', '".$apeP."', '".$apeM."', '".$age."','".$anios."');";
    $result = $this->conectar();
    if($result){
      $newid=$this->insertar($sql);
      }
    else{
        $newid = 0;
    }
    return $newid;
  }
  /*--------------------------ACTUALIZAR INSTRUCTOR----------------------------*/
  public function updINST($num,$nombre,$apeP,$apeM,$age,$anios)
  {
    $sql="update instructores set nombrePila='".$nombre."', apellidoPat='".$apeP."', apellidoMat='".$apeM."', edad='".$age."', años_experiencia='".$anios."' where numero ='".$num."';";
      $result = $this->conectar();
      if($result){
      $this->actualizar($sql);
        $check = true;
    }
    else{
        $check = false;
    }
    return $check;
  } 
  /*----------------------------ELIMINAR INSTRUCTOR----------------------------*/
  public function DELinst($id){
      $sql="delete from instructores where numero='".$id."';";
        $result = $this->conectar();
        if($result){
        $this->delete($sql);
          $check = true;
      }
      else{
          $check = false;
      }
      return $check;
    }
    public function delIG($id){
      $sql="delete from instructor_grupo where instructor='".$id."';";
        $result = $this->conectar();
        if($result){
        $this->delete($sql);
          $check = true;
      }
      else{
          $check = false;
      }
      return $check;
    }
  /*------------------------ASIGNAR GRUPO AL INSTRUCTOR-----------------------*/ 
    public function setIG($instructor,$grupo){
      $sql="insert into instructor_grupo(instructor,grupo) values ('".$instructor."', '".$grupo."');";
      $result = $this->conectar();
      if($result){
        $newid=$this->insertar($sql);
        }
      else{
          $newid = 0;
      }
      return $newid;
    }
}   
?>