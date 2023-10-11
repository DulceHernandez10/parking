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
<img src="logo3.png" alt="" class="logo">
<style>
  img{
        max-width:70%;
        
        
        height: 10px;
    }
  </style>
<input type="checkbox" id="check">
<label for="check" class="checkbtn">

<i class="fas fa-bars"></i>

</label>


<ul>
  
<li><a style="font-size: 15px " href="#">HOLA <?php echo $_SESSION['usuario_u']?></a></li>
<li><a style="font-size: 15px"href="cerrar_sesion.php">Cerrar Sesion</a></li>



</ul>
</nav>
<p>
</p>
<style>

</style>
</body>
</html>
 
  <p>
    <h1><center>ESPACIOS DISPONIBLES</center></h1>
  <p>
  
 <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Espacio</th>
      <th scope="col">Estatus</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
 


<?php 


$imprime_tabla= "SELECT id_e, nombre_e, estatus_e FROM espacios_e";
$resultado_impresion= mysqli_query($miConexion, $imprime_tabla);
$filas=mysqli_num_rows($resultado_impresion);

$estatus_e='estatus_e';
while($fila = mysqli_fetch_array($resultado_impresion)){
  


  
  
  echo "<tr>"
  ."<td>".$fila['id_e']."</td>"
  ."<td>" .$fila['nombre_e']."</td>"
  ."<td>".$fila['estatus_e']."</td>";
  if($fila['estatus_e']=='Disponible'){
    echo"<td><a class='btn btn-primary' href='ModificarEspacio.php?id_e=".$fila['id_e']."' role='button' >Seleccionar</a></td>";
  }else{
    echo"<td>"."<a>No disponible</a>"."</td>";
  }"</tr>";

}



 

mysqli_close($miConexion);

?>
</tbody>
</table>
