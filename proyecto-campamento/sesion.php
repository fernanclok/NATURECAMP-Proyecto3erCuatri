<?php
session_start();
if(isset($_SESSION['Correo'])){
    $menuadmin=true;
    $user='Welcome '.$_SESSION['Correo'];
}
else{
    $menuadmin=false;
    $user='';
}
?>