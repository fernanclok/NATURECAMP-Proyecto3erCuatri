<?php
/*include('sesion.php');
if($menuadmin==false){
	header ('Location: inicio.html');
}*/
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
         <br><br><br><br><br>
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
					<li><a href="borrarADMIN.php">Eliminarr</a></li>
				</ul>
			</li>
		</ul>
	        </nav>
        </header>
        <br><br><br><br>
        <section class="secundaria">
        <form method="POST" action="Logic/funcionesADMIN.php" enctype="multipart/form-data">
        <h1 id="adminis">Ingreso de Administrador:</h1><br><br>                
                <input class="entradas" type="text" name="txtnom" maxlength="15" pattern="[A-Za-zÑñáéíóúÁÉÍÓÚ ]*" required placeholder="Nombre (s)">
        
                <input class="entradas" type="text" name="txtpat" maxlength="20" pattern="[A-Za-zÑñáéíóúÁÉÍÓÚ ]*" required placeholder="Apellido Paterno">

                <input class="entradas" type="text" name="txtmat" maxlength="20" pattern="[A-Za-zÑñáéíóúÁÉÍÓÚ ]*" required placeholder="Apellido Materno">

                <input class="entradas" type="email" name="txtemail" maxlength="40" required placeholder="Correo" >
                
                <input class="entradas" type="password" name="txtpass" maxlength="20" required placeholder="Contraseña">
                
                <br>
                <input class= "buton1" type="submit" value="Ingresar Admin">
                <input class="buton1" type="reset" value="Cancelar">
            </form>
        </section>
        <br><br><br><br>
    </body>
    </html>