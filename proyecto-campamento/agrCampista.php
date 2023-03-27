<html>
<head>
        <meta charset="UTF-8">
        <meta http-equiv="x-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <script src="https://kit.fontawesome.com/c65205b7f3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="./style.css">
        <title>Nature Camp</title>
        <link rel="icon" href="img/favicon.ico" type="ICO" sizes="16x16">
    </head>

    <body class="recibito">
       <header>
        <div class="contenedor">
            <h3>NATURE CAMP</h3>
            <div class="box">
            </div>
            <div class="bg_color"></div>
            <div class="wave w1"></div>
            <ul>
                <a href="inicio.html"><li>Inicio</li></a>
                <a href="Actividades.html"><li>Actividades</li></a>
                <a href="Nosotros.php"><li>Nosotros</li></a>
                <a href="inscribirse.php"><li>Inscribirse</li></a>
                <a href="iniciarsesion.php"><li>Administracion</li></a>
            </ul>
            
        </div>
         </header>-->
        <?php
      include_once("campista.php");
      $mycampista=new campista();
      $newC=$mycampista->setCiudad( $_POST['txtciudad'],
      $_POST['txtestado']
      );
      $newCCC=$mycampista->setCiudad( $_POST['txtciudades'],
      $_POST['txtestados']
      );
     
      $newCD=$mycampista->setCampista(
                                      $_POST['txtfirst'],
                                      $_POST['txtlast'],
                                      $_POST['txtsecond'],
                                      $_POST['txtage'],
                                      $_POST['txtphone1'],
                                      $_POST['txtemail'], 
                                        $_POST['txtestado'],
                                      $newC
                                    
                                    
      ); 
       
      $mycampista->setGC($newCD, $_POST['txtgrupo']
      );
      $newcodigo=$mycampista->setcont_emergencia(
                                      $_POST['txtnombre'],
                                      $_POST['txtapeP'],
                                      $_POST['txtapeM'],
                                      $_POST['txtphone'],
                                      $newCCC,
                                      $_POST['txtestado']
                                      
      );
      $mycampista->setcampista_contacto($newCD,$newcodigo);

      $mycampista->setcampista_Medico($newCD, $_POST['txtselect']
      );

      $mycampista->setcampista_Medicos($newCD, $_POST['txtenfer']
      );

      $mycampista->setcampista_Med($newCD, $_POST['txtcv']
      );
      ?>
      
      <br><br><br><br><br><br>
      <nav class="RECIBO">
      <br>
      BIENVENIDO A ESTE TU CAMPAMENTO<br>
             'Nature Camp'<br><br>
                Campista:
    <label class="recibos">
        <?php
        echo "<br>".$_POST['txtfirst']." ".$_POST['txtlast']." ".$_POST['txtsecond'];  echo "<br>"."<br>";
        echo "Edad: "."<br>".$_POST['txtage']; echo "<br>"."<br>";
        echo "Telefono: "."<br>".$_POST['txtphone1']; echo "<br>"."<br>";
        echo "Email: "."<br>".$_POST['txtemail']; echo "<br>"."<br>";
        echo "Ciudad: "."<br>".$_POST['txtciudad'].", ".$_POST['txtestado']; echo "<br>";
        echo "Grupo: "."<br>".$_POST['txtgrupo'];echo "<br>";
        ?>
    </label>
    <br>
                      Contacto de Emergencia
    <label class="recibos">
        <?php
         echo "<br>"."<br>";
        echo "Contacto: "."<br>".$_POST['txtnombre']." ".$_POST['txtapeP']." ".$_POST['txtapeM']; echo "<br>"."<br>";
        echo "Numero Tel: "."<br>".$_POST['txtphone'];echo "<br>";
        ?>
    </label>
      </nav>
      <br><br><br>
      <h2 class="TITULO">¿Que dicen nuestros campistas?</h2>
      <section class="forma">
        <div class="cartones">
            <div class="cadro">
                <img src="img/sophia.jpg">
                <div class="contenido-comentario">
                <h4 id="name">Sophia</h4>
                <p>En lo personal mi experiencia dentro del
                    campamento fue exepcional, las actividades
                    realizadas dentro de este campamento fuerón
                    dinamicas y muy divertidas, 100% recomendado.</p>
                </div>
        </div>
        </div>
        <div class="cartones">
            <div class="cadro">
                <img src="img/marco.jpg">
                <div class="contenido-comentario">
                <h4 id="name">Marcos Morales</h4>
                <p>Profesionalismo, excelente organización y
                    perfecta gestion de sus tiempos y de nuestros
                    datos, sufri un accidente y rapidamente hubo
                    atencion medica conforme mis datos, y se
                    notifico de manera excelente a mi contacto de
                    emergencia...
                </p>
                </div>
        </div>
        </div>
      </section>
      <footer class="pie-pagina">
            <div class="grupo-1">
                <div class="box2">
                 <figure>
                     <a>
                         <!--logo-->
                         <img src="img/logo.png" alt="logo de Nature Camp" class="imagen">
                     </a>
                 </figure>
                </div>
                <div class="box2">
                     <h2>SOBRE NOSOTROS</h2>
                     <p>Somos un campamento mexicano ubicado en Tijuana,nuestra finalidad es ser uno de los
                         mejores campamentos gratuitos de la Republica Mexicana
                     </p>
                </div>
                <div class="box2">
                    <h2>SECCIONES</h2>
                    <div class="secciones-box">
                        <li><a href="inicio.html">Inicio</a></li>
                        <li><a href="#">Actividades</a></li>
                        <li><a href="Nosotros.html">Nosotros</a></li>
                        <li><a href="inscribirse.php">Inscribirse</a></li>
                        <li><a href="iniciarsesion.php">Administracion</a></li>
                    </div>
                </div>
                <div class="box2">
                 <h2>REDES SOCIALES ¡¡¡¡SIGUENOS!!!!!</h2>
                 <div class="red-social">
                     <a href="https://www.facebook.com/profile.php?id=100005347605393"><i class="fa-brands fa-facebook-f"></i></a>
                     <a href="#"><i class="fa-brands fa-instagram"></i></a>
                     <a href="#"><i class="fa-brands fa-twitter"></i></a>
                 </div>
                </div>
            </div>
            <div class="grupo-2" >
             <small>&copy; 2022 <b>- TODOS LOS DERECHOS RESERVADOS.[Este proyecto es con fines educativos, no esta ala vente]</b></small>
            </div>
    </body>
</html>