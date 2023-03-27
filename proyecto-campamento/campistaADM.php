<?php
include('sesion.php');
if($menuadmin==false){
	header ('Location: inicio.html');
}
?>
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
    <body class="administrador">
    <header>
        <div class="contenedor">
            <h3>NATURE CAMP</h3>
            <div class="box">
            </div>
            <ul>
				<a href="administrador.php"><li>Menu Principal</li></a>
                <a href="logout.php"><li>Cerrar sesion</li></a>
            </ul>
           
</div>
         <br><br><br><br>
            <nav class="menuAD">
		<ul class="menu-horizontal-admin">
			<li>
            <a href="consultarINST.php">INSTRUCTORES</a>
				<ul class="menu-vertical">
					<li><a href="insertarINST.php">Agregar</a></li>
					<li><a href="actualizarINST.php">Actualizar</a> </li>
					<li><a href="borrarINST.php">Eliminar</a></li>
                    <li><a href="INSTRUCTORGRUPO.php">Asignar</a></li>
				</ul>
			</li>
			<li>
				<a href="consultarCamp.php">CAMPISTA</a>
				<ul class="menu-vertical">
                <li><a href="campistaADM.php">Agregar</a></li>
					<li><a href="actualizarCAM.php">Actualizar</a> </li>
					<li><a href="borrar.php">Eliminar</a></li>
                    <li><a href="AsignarGrupo.php">Asignar</a></li>
				</ul>
			</li>
			<li>
				<a href="consultaADMIN.php">ADMINISTRADORES</a>
				<ul class="menu-vertical">
                <li><a href="insertarADMIN.php">Agregar</a></li>
					<li><a href="actualizarADMIN.php">Actualizar</a> </li>
					<li><a href="borrarADMIN.php">Eliminar</a></li>
				</ul>
			</li>
		</ul>
	        </nav>
        </header>
        <br><br><br>
        <section class="secundaria">
             <form method="POST" action="logic/funcionesADM.php" enctype="multipart/form-data">
                <h1 id="adminis">Ingreso de Campista:</h1><br><br>
                <input class="entradas" type="text" name="txtnombre" maxlength="40", pattern="[A-Za-zÑñáéíóúÁÉÍÓÚ ]*", required, placeholder="Nombre (s)">
                
                <input class="entradas" type="text" name="txtapellidoP" maxlength="40", pattern="[A-Za-zÑñáéíóúÁÉÍÓÚ ]*",required, placeholder="Apellido Paterno">

                <input class="entradas" type="text" name="txtapellidoM" maxlength="40", pattern="[A-Za-zÑñáéíóúÁÉÍÓÚ ]*", placeholder="Apellido Materno">
                
                <input class="entradas" type="number" name="txtedades" maxlength="2", required pattern="[0-9]*" min="18" max="25" placeholder="Edad">

                <input class="entradas" type="email" name="txtemail" maxlength="40" placeholder="Correo">

                <input class="entradas" type="tel" name="txttelefono"  maxlength="10" minlength="10" required pattern="[0-9]*" placeholder="Telefono">
                
                <select class="entradas" name="txtESTADO">
                <option selected value disabled>Estado de recidencia</option>
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

                  <input class="entradas" type="text"name="txtCIUDAD" maxlength="30", required pattern="[a-zA-Z nÑáéíóúÁÉÍÓÚ]*" placeholder="Ciudad de residencia">
                  <br>
                  <select class="entradas" name="txtgrupo" required>
                    <option selected value disabled>Grupo</option>
                    <option value="GAV">Gavilan</option>
                    <option value="HIE">Hiena</option>
                    <option value="IGU">Iguana</option>
                    <option value="JAB">Jabali</option>
                    <option value="KOA">Koala</option>
                    <option value="LUC">Luciernaga</option>
                  </select> 
<br>
                  <h1 id="adminis">Ingreso de Contacto:</h1>
<br><br>
                <input class="entradas" type="text" name="txtfirst" maxlength="40", pattern="[A-Za-zÑñáéíóúÁÉÍÓÚ ]*", required, placeholder="Nombre (s)">
                
                <input class="entradas" type="text" name="txtlast" maxlength="40", pattern="[A-Za-zÑñáéíóúÁÉÍÓÚ ]*",required, placeholder="Apellido Paterno">

                <input class="entradas" type="text" name="txtsecond" maxlength="40", pattern="[A-Za-zÑñáéíóúÁÉÍÓÚ ]*", placeholder="Apellido Materno">

                <input class="entradas" type="tel" name="txttelefono2"  maxlength="10" minlength="10" required pattern="[0-9]*" placeholder="Telefono">
                
                <select class="entradas" name="txtestadosAD">
                <option selected value disabled>Estado de recidencia</option>
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

                  <input class="entradas" type="text"name="txtciudadAD" maxlength="30", required pattern="[a-zA-Z nÑáéíóúÁÉÍÓÚ]*" placeholder="Ciudad de residencia">
                  <br>

                <input class="buton1" type="submit" value="Ingresar Campista">
                <input class="buton1" type="reset" value="Cancelar">
                <br>
             </form>
        </section>
        <br><br><br><br>
    </body></html>