<?php
include_once("../campista.php");
        $mycampistaAD=new campista();
$grupos=$mycampistaAD->setCamGRUPO($_POST['txtcampista'],$_POST['txtgrupo']);
header('Location: ../consultarCamp.php');        
?>