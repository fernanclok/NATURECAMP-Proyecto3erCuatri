<?php
    include_once("../campista.php");
    $myinstructorAD=new campista();
    $newINS=$myinstructorAD->updINST($_POST['txtnumero'],
                    $_POST['txtname'],
                    $_POST['txtpaterno'],
                    $_POST['txtmaterno'],
                    $_POST['txtedad'],
                    $_POST['txtanios']
    );
    header('Location: ../consultarINST.php');
?>