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
<li><a style="font-size: 15px" class="active" href="Espacios.php">Espacios</a></li>
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

</style>
</body>
</html>
 
  <p>
  <p>
 <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Estatus</th>
      <th scope="col">Usuario</th>
   
    </tr>
  </thead>
  <tbody>
 


<?php 


$imprime_tabla= "SELECT * FROM espacios_e";
$resultado_impresion= mysqli_query($miConexion, $imprime_tabla);
 
while($fila = mysqli_fetch_array($resultado_impresion)){
  
  echo "<tr>"
  ."<td>".$fila['id_e']."</td>"
  ."<td>" .$fila['nombre_e']."</td>"
  ."<td>".$fila['estatus_e']."</td>"
  ."<td>".$fila['usuario']."</td></tr>";
}
mysqli_close($miConexion);

?>
</tbody>
 </table>

<?php

include "pie_b.php";
 
?>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>




