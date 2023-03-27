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
					<li><a href="actualizarCAM.php">Actualiza</a></li>
					<li><a href="borrar.php">Eliminar</a></li>
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
        <br><br><br><br><br>
        <section class="secundaria">
             <form method="POST" action="logic/ASIGNAR.php" enctype="multipart/form-data">
             <h1 id="adminis">Asignar Grupo: </h1><br><br>
                  <input class="entradas" type="text"name="txtcampista" maxlength="2", required pattern="[0-9]*" placeholder="Codigo del Campista">
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
                <input class="buton1" type="submit" value="Asignar Campista">
                <input class="buton1" type="reset" value="Cancelar">
                <br>
             </form>
        </section>
        <br><br><br><br>
    </body></html>