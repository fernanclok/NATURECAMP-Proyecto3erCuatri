<?php
  include_once("../campista.php");
  $mycampistaAD=new campista();
  $newCiudad=$mycampistaAD->setCiudad( $_POST['txtCIUDAD'],
      $_POST['txtESTADO']
      );
      $newCiudadCONTACTo=$mycampistaAD->setCiudad( $_POST['txtciudadAD'],
      $_POST['txtestadosAD']
      );
      $newCD=$mycampistaAD->setCampista($_POST['txtnombre'],
                                      $_POST['txtapellidoP'],
                                      $_POST['txtapellidoM'],
                                      $_POST['txtedades'],
                                      $_POST['txttelefono'],
                                      $_POST['txtemail'], 
                                        $_POST['txtESTADO'],
                                      $newCiudad
                                    
                                    
      );
      $mycampistaAD->setGC($newCD, $_POST['txtgrupo']
      );
      $newcodigo=$mycampistaAD->setcont_emergencia(
                                      $_POST['txtfirst'],
                                      $_POST['txtlast'],
                                      $_POST['txtsecond'],
                                      $_POST['txttelefono2'],
                                      $newCiudadCONTACTo,
                                      $_POST['txtestadosAD']
                                      
      );
    header ('Location: ../consultarCamp.php')
?>