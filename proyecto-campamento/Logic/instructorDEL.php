<?php
    include_once("../campista.php");
    $myinstructorAD=new campista();
    $newINS=$myinstructorAD->delIG(
        $_POST['txtnumeroINST']  
    );
    $newINS=$myinstructorAD->DELinst(
        $_POST['txtnumeroINST']     
    );
    
    header('Location: ../consultarINST.php');
?>