<?php
        include_once("../campista.php");
        $mycampistaAD=new campista();
  $oldcamp=$mycampistaAD->delBorrar($_POST['txtnumeroCAM']);
  $GRUPO=$mycampistaAD->delBorrado($_POST['txtnumeroCAM']);
  $g=$mycampistaAD->delBorra($_POST['txtnumeroCAM']);
  $g=$mycampistaAD->delCACO($_POST['txtnumeroCAM']);
  $oldCampista=$mycampistaAD->setBorrar( $_POST['txtnumeroCAM']);
  header('Location: ../consultarCamp.php');
?>