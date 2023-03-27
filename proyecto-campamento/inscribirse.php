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

    <body class="ins">
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
                <a href="Nosotros.html"><li>Nosotros</li></a>
                <a href="inscribirse.php"><li>Inscribirse</li></a>
                <a href="login.php"><li>Administración</li></a>
            </ul>
            
        </div>
         </header>
         <form method="POST" action="agrCampista.php" action="comprobante.php" enctype="multipart/form-data">
              <hr>
                    <br>
                <div class="per">
<!------------------------------------------------------Datos PERSONALES------------------------------------------------------------------------>
                <section1>
                    <br>
                    <h2 class="subtitulo">Datos Personales</h2>
                <label name="lblfirst">Nombre (s): <span class="requerido">*</span></label><br>
                <input type="text" name="txtfirst" maxlength="30", pattern="[A-Za-zÑñáéíóúÁÉÍÓÚ ]*", required placeholder="Solo letras">
                <br><br>
                <label name="lbllast">Apellido Paterno: <span class="requerido">*</span></label><br>
                <input type="text" name="txtlast" maxlength="15", pattern="[A-Za-zÑñáéíóúÁÉÍÓÚ ]*", required placeholder="Solo letras">
                <br>
                <br>
                <label name="lblsecond">Apellido Materno: </label><br>
                <input type="text" name="txtsecond" maxlength="15", pattern="[A-Za-zÑñáéíóúÁÉÍÓÚ ]*" placeholder="Solo letras">
                <br>
                <br>
                <label name="lblage">Edad: <span class="requerido">*</span></label><br>
                <input type="number" name="txtage" maxlength="2", required pattern="[0-9]*" min="18" max="25" placeholder="Mayores de edad 18 á 25 años">
                <br>
                <br>
                <label name="lblcorreo"> Correo: </label><br>
                <input type="email" name="txtemail" maxlength="40" placeholder="ejemplo@gmail.com">
                <br>
                <br>
                <label name="lblcel">Telefono: <span class="requerido">*</span></label><br>
                <input type="tel" name="txtphone1" maxlength="10" minlength="10" required pattern="[0-9]*" placeholder="(Código de área) Número">
                <br>
                <br> 
                <label name="lblestado">Estado: <span class="requerido">*</span></label><br>
                <select name="txtestado">
                <option selected value disabled>--seleccione--</option>
                    <option value='AGS'>Aguascalientes</option>
                    <option value='BC'>Baja California</option>
                    <option value='BCS'>Baja California Sur</option>
                    <option value='CPH'>Campeche</option>
                    <option value='CHI'>Chiapas</option>
                    <option value='CHH'>Chihuahua</option>
                    <option value='COA'>Coahuila</option>
                    <option value='COL'>Colima</option>
                    <option value='DUR'>Durango</option>
                    <option value='GUA'>Guanajuato</option>
                    <option value='GUE'>Guerrero</option>
                    <option value='HID'>Hidalgo</option>
                    <option value='JAL'>Jalisco</option>
                    <option value='CDMX'>Ciudad de México</option>
                    <option value='MIC'>Michoacán</option>
                    <option value='MOR'>Morelos</option>
                    <option value='NAY'>Nayarit</option>
                    <option value='NUL'>Nuevo León</option>
                    <option value='OXA'>Oaxaca</option>
                    <option value='PUE'>Puebla</option>
                    <option value='QUE'>Querétaro</option>
                    <option value='QRO'>Quintana Roo</option>
                    <option value='SLP'>San Luis Potosí</option>
                    <option value='SIN'>Sinaloa</option>
                    <option value='SON'>Sonora</option>
                    <option value='TAB'>Tabasco</option>
                    <option value='TAM'>Tamaulipas</option>
                    <option value='TLX'>Tlaxcala</option>
                    <option value='VER'>Veracruz</option>
                    <option value='YUC'>Yucatán</option>
                    <option value='ZAC'>Zacatecas</option>
                    <option value='OTR'>--Otro--</option>
                  </select> 
                  <br><br>
                  <label name="lblciudad">Ciudad: <span class="requerido">*</span></label><br>
                <input type="text"name="txtciudad" maxlength="30", required pattern="[a-zA-Z nÑáéíóúÁÉÍÓÚ]*" placeholder="Ciudad de residencia">
                <br>
                <br>
                  <label name="lblgrupo">Grupo</label><br>
                <select name="txtgrupo">
                <option selected value disabled>--seleccione--</option>
                    <option value="GAV">Gavilan</option>
                    <option value="HIE">Hiena</option>
                    <option value="IGU">Iguana</option>
                    <option value="JAB">Jabali</option>
                    <option value="KOA">Koala</option>
                    <option value="LUC">Luciernaga</option>
                  </select> 
                </section1>
<!-----------------------------------------------------Contacto Emergencia---------------------------------------------------------------->
                <section1>
                    <br>
                    <br>
                <h2 class="subtitulo"> Contacto de Emergencia</h2>
                <br>
                <label name="lblfirst">Nombre (s): <span class="requerido">*</span></label><br>
                <input type="text" name="txtnombre" maxlength="20", pattern="[A-Za-zÑñáéíóúÁÉÍÓÚ ]*", required, placeholder="Solo letras">
                <br>
                <br>
                <label name="lbllast">Apellido Paterno: <span class="requerido">*</span></label><br>
                <input type="text" name="txtapeP" maxlength="20", pattern="[A-Za-zÑñáéíóúÁÉÍÓÚ ]*",required, placeholder="Solo letras">
                <br>
                <br>
                <label name="lblsecond">Apellido Materno: </label><br>
                <input type="text" name="txtapeM" maxlength="20", pattern="[A-Za-zÑñáéíóúÁÉÍÓÚ ]*" placeholder="Solo letras">
                <br>
                <br>
                <label name="lblestado">Estado:</label><br>
                <select name="txtestados">
                <option selected value disabled>--seleccione--</option>
                    <option value='AGS'>Aguascalientes</option>
                    <option value='BC'>Baja California</option>
                    <option value='BCS'>Baja California Sur</option>
                    <option value='CPH'>Campeche</option>
                    <option value='CHI'>Chiapas</option>
                    <option value='CHH'>Chihuahua</option>
                    <option value='COA'>Coahuila</option>
                    <option value='COL'>Colima</option>
                    <option value='DF'>Distrito Federal</option>
                    <option value='DUR'>Durango</option>
                    <option value='GUA'>Guanajuato</option>
                    <option value='GUE'>Guerrero</option>
                    <option value='HID'>Hidalgo</option>
                    <option value='JAL'>Jalisco</option>
                    <option value='EMX'>México</option>
                    <option value='MIC'>Michoacán</option>
                    <option value='MOR'>Morelos</option>
                    <option value='NAY'>Nayarit</option>
                    <option value='NUL'>Nuevo León</option>
                    <option value='OXA'>Oaxaca</option>
                    <option value='PUE'>Puebla</option>
                    <option value='QUE'>Querétaro</option>
                    <option value='QRO'>Quintana Roo</option>
                    <option value='SLP'>San Luis Potosí</option>
                    <option value='SIN'>Sinaloa</option>
                    <option value='SON'>Sonora</option>
                    <option value='TAB'>Tabasco</option>
                    <option value='TAM'>Tamaulipas</option>
                    <option value='TLX'>Tlaxcala</option>
                    <option value='VER'>Veracruz</option>
                    <option value='YUC'>Yucatán</option>
                    <option value='ZAC'>Zacatecas</option>
                  </select> 
                  <br>
                  <br>
                  <label name="lblciudad">Ciudad: </label><br>
                <input type="text"name="txtciudades" maxlength="30", required pattern="[a-zA-Z nÑáéíóúÁÉÍÓÚ]*" placeholder="Ciudad de residencia">
                <br>
                <br>
                 <label name="lblcel">Telefono: <span class="requerido">*</span></label><br>
                <input type="text"name="txtphone" maxlength="10" minlength="10", required pattern="[0-9]*" placeholder="(Código de área) Número">
                <br>
                <br>
                </section1>
<!--------------------------------------------------------Datos Medicos--------------------------------------------------------------------->
                <section1>
                <br><br><br><br><br>     
                    <h2 class="subtitulo">Datos Medicos</h2>
                <br>
                <label name="lblselect">Grupo Sangineo: <span class="requerido">*</span></label><br>
                <select required name="txtselect">
                    <option selected value disabled>--seleccione--</option>
                    <option value="O-">O-</option>
                    <option value="O+">O+</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                  </select> 
                  <br>
                  <br>
                  <label name="lblenf">Enfermedad Principal: <span class="requerido">*</span></label><br>
                <select required name="txtenfer">
                    <option selected value disabled>--seleccione--</option>
                    <option value="ASM">Asma</option>
                    <option value="HIP">Hipertencion</option>
                    <option value="DIAB">Diabetes</option>
                    <option value="BONQ">Bronquitis</option>
                    <option value="CV19">Covid</option>
                    <option value="SKIN">Infecciones de piel</option>
                    <option value="SINU">Sinusitis</option>
                    <option value="CEG">Cegera</option>
                    <option value="VIH">Sida</option>
                    <option value="GAST">Gastritis</option>
                    <option value="NIN">--Ninguna--</option>
                  </select>
                  <br><br>
                  <label name="lblcv">¿Cuenta con vacuna Covid?<span class="requerido">*</span></label><br>
                <select required name="txtcv">
                <option selected value disabled>--seleccione--</option>
                    <option value="CV19SI">Si</option>
                    <option value="CV19NO">No</option>
                </select>
                <br>
                <br>
                <h1>Nota</h1>
                <nav>
                    <p>
                        Es importante que sea  cien porciento honest@ con sus padecimientos. 
                        Atte: Corporativo Nature Camp
                    </p>
                </nav>
                </section1>
                </div>
                <br> <br>
               
                <input class="enviar"  type="reset" value="Cancelar">
                <input class="enviar" type="submit" value="Enviar">
        </form>
        <footer class="pie-pagina">
            <div class="grupo-1">
                <div class="box2">
                 <figure>
                     <a>
                         <!--logo-->
                         <img src="img/logo.png" href="#" alt="logo de Nature Camp" class="imagen">
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
                        <li><a href="Actividades.html">Actividades</a></li>
                        <li><a href="Nosotros.html">Nosotros</a></li>
                        <li><a href="inscribirse.php">Inscribirse</a></li>
                        <li><a href="login.php">Login</a></li>
                    </div>
                </div>
                <div class="box2">
                 <h2>REDES SOCIALES</h2>
                 <div class="red-social">
                     <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                     <a href="#"><i class="fa-brands fa-instagram"></i></a>
                     <a href="#"><i class="fa-brands fa-twitter"></i></a>
                 </div>
                </div>
            </div>
            <div class="grupo-2" >
             <small>&copy; 2022 <b>- TODOS LOS DERECHOS RESERVADOS.[Este proyecto es con fines educativos, no esta a la vente]</b></small>
            </div>
  </body>
</html>
