<?php
include_once("../campista.php");
$mycampistaAD=new campista();
$ig=$mycampistaAD->setIG($_POST['txtinstructor'],$_POST['txtgroup']);
header('Location: ../consultarINST.php');   
?>