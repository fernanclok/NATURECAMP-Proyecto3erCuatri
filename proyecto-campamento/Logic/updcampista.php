<?php
include_once("../campista.php");
$mycampistaAD=new campista();
$newCiudad=$mycampistaAD->setCiudad( $_POST['txtCIUDAD'],
$_POST['txtESTADO']
);   
      $newCamista=$mycampistaAD->actCampista( $_POST['txtnumeroCAM'],
                                            $_POST['txtnombre'],
                                            $_POST['txtapellidoP'],
                                            $_POST['txtapellidoM'],
                                            $_POST['txtedades'],
                                            $_POST['txtemail'],
                                            $_POST['txttelefono'],
                                            $_POST['txtESTADO'],
                                            $newCiudad

    );
    header('Location: ../consultarCamp.php');
?>