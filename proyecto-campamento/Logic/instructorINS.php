
<?php
    include_once("../campista.php");
    $myinstructorAD=new campista();
    $newINS=$myinstructorAD->setINST(
                    $_POST['txtname'],
                    $_POST['txtpaterno'],
                    $_POST['txtmaterno'],
                    $_POST['txtedad'],
                    $_POST['txtanios']
    );
    header('Location: ../consultarINST.php');
?>