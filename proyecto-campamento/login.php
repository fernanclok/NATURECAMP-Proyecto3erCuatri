<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--pack de iconos-->
        <script src="https://kit.fontawesome.com/c65205b7f3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="./style.css">
        <title>Nature Camp</title>
        <link rel="icon" href="img/favicon.ico" type="ICO" sizes="16x16">
    </head>
    <body background="background-color='Black'">
    <header>
        <div class="contenedor">
            <h3>NATURE CAMP</h3>
            <div class="box">
            </div>
            <ul>
                <a href="inicio.html"><li>Inicio</li></a>
                <a href="Actividades.html"><li>Actividades</li></a>
                <a href="Nosotros.html"><li>Nosotros</li></a>
                <a href="inscribirse.php"><li>Inscribirse</li></a>
                <a href="login.php"><li>Administración</li></a>
            </ul>
           
        </div>
         </header>
        <br>
        <div class="login-box">
            <h2>Iniciar sesion</h2>
            <form method="POST" action="iniciarsesion.php"enctype="multipart/form-data">
                <input type="email" placeholder="Correo" name="txtcorreo" minlength="8" maxlength="40", required>
                <br>
                <br>
                <input type="password" placeholder="Contraseña" alt="strongPass" name="txtpass"  maxlength="20" minlength="5", required>
                <br>
                <br>
                <hr>
                <br>
                <button>Iniciar sesion</button>
              </div>
            </form>
          </div>
          <br>
          <br>
          <br>
          <br>
     </body>
 </html>