<?php 
 include "dbconnect.php";
 include "Encabezado_b.php";
 session_start();
 
 

 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Parking Inteligente
</title>
<link rel="stylesheet" href="estilo_menu.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body>
<nav>
<style>

  </style>
<input type="checkbox" id="check">
<label for="check" class="checkbtn">
<i class="fas fa-bars"></i>
</label>
<a href="#" class="enlace">

</a>
<ul>
<li><a style="font-size: 15px"  href="inicio_adm.php">Inicio</a></li>
<li><a style="font-size: 15px"  href="Ver_usuarios.php">Clientes</a></li>
<li><a style="font-size: 15px" href="Entradas.php">Entradas</a></li>
<li><a style="font-size: 15px" href="Salidas.php">Salidas</a></li>
<li><a style="font-size: 15px" href="Espacios.php">Espacios</a></li>
<li><a style="font-size: 15px" class="active" href="FormularioAgregar.php">Registrar usuario</a></li>
<li><a style="font-size: 15px " href="#">HOLA <?php echo $_SESSION['usuario_u']?></a>
					<ul>
						
						<li><a style="font-size: 15px"href="cerrar_sesion.php">Cerrar Sesion</a></li>
						
					</ul>
				</li>



</ul>
</nav>
<p>
</p>
<style>

</style>
</body>
</html>
<form method="GET" action="insertar_usuarios.php">
<div class="container" >

	<header>
        <link rel="stylesheet" type="text/css" href="diseño_formulario.css">

	</header>
	<h1 class="text-center">Registrar</h1>
	<form class="registration-form">
		<label class="col-one-half">
			<span class="label-text">Nombre</span>
			<input type="text" name="nombre_u">
		</label>
		<label class="col-one-half">
			<span class="label-text">Apellido</span>
			<input type="text" name="apellido_u">
		</label>
		<label>
			<span class="label-text">Domicilio</span>
			<input type="text" name="domicilio_u">
		</label>
        <label>
			<span class="label-text">Puesto</span>
			<input type="text" name="puesto_u">
		</label>
        <label>
		<span class="label-text">rol de usuario</span>
		<select class="label-text2" name="rol_u" id="rol_u">
			<option>Administrador</option>
			<option>Cliente</option>
		</select>
		</label>
        <label class="col-one-half">
			<span class="label-text">Username</span>
			<input type="text" name="usuario_u">
		</label>
		<label class="col-one-half">
			<span class="label-text">Password</span>
			<input type="text" name="password_u">
		</label>
        <label>
			<span class="label-text"></span>
			<input class="archivo" type="file" name="foto_u"/>
		</label>
		
		<div class="text-center">
			<button style="color: white" class="submit" name="register">Registrar</button>
		</div>
	</form>
</div>
</form>
