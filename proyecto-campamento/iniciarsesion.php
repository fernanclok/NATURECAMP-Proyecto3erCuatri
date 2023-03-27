<?php
include ('validar.php');
$myAdmin=new admin();
$dataset = $myAdmin->getLOGIN(
              $_POST['txtcorreo'],
              $_POST['txtpass']
            );
            
if($dataset=="vacio"){
    echo "no hay datos";
  }else{
    $count=mysqli_num_rows($dataset);
    if($count==1){
        $fila=mysqli_fetch_assoc($dataset);
         session_start();
         $_SESSION['id']=$fila['passAD'];
         $_SESSION['Correo']=$fila['correoAD'];
         header('Location: administrador.php');
      } else {
         header ('Location: login.php');
    }
  }
  
?>