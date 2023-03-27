<?php
include_once("../campista.php");

$myAdmin= new campista();
$newid=$myAdmin->setAdmin(
    $_POST['txtnom'],
    $_POST['txtpat'],
    $_POST['txtmat'],
    $_POST['txtemail'],
    password_hash($_POST['txtpass'], PASSWORD_DEFAULT),
);
header ('Location: ../consultaADMIN.php')
?>