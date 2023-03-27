<?php
include_once("../campista.php");

$myAdmin= new campista();
$newid=$myAdmin->updAdmin(
    $_POST['txtid'],
    $_POST['txtnom'],
    $_POST['txtpat'],
    $_POST['txtmat'],
    $_POST['txtemail'],
    $_POST['txtpass']
);
header ('Location: ../consultaADMIN.php')
?>