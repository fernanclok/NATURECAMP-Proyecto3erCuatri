<?php
include_once("../campista.php");

$myAdmin= new campista();
$newid=$myAdmin->delAdmin(
    $_POST['txtid']
);
header ('Location: ../consultaADMIN.php')
?>