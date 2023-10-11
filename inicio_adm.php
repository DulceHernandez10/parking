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
<li><a style="font-size: 15px" class="active" href="inicio_adm.php">Inicio</a></li>
<li><a style="font-size: 15px"href="Ver_usuarios.php">Clientes</a></li>
<li><a style="font-size: 15px" href="Entradas.php">Entradas</a></li>
<li><a style="font-size: 15px" href="Salidas.php">Salidas</a></li>
<li><a style="font-size: 15px" href="Espacios.php">Espacios</a></li>
<li><a style="font-size: 15px" href="FormularioAgregar.php">Registrar usuario</a></li>
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
body{
	background-image: url('https://www.shutterstock.com/image-photo/cars-parking-asphalt-trees-cloudy-260nw-1576589563.jpg') ;
	background-size: cover;
	
}
</style>
</body>
</html>
