<?php

$espacio=$_GET['espacio'] ;

$host="localhost";
$user="root";
$psw="root1234";
$db="parking_inteligente";
$estatus_cambio='Ocupado';
$estatus_cambio2='Disponible';
$usuario2='';



$miConexion=mysqli_connect($host, $user,$psw,$db);
$imprime_tabla= "SELECT * FROM espacios_e";
$resultado_impresion= mysqli_query($miConexion, $imprime_tabla);
 
while($fila = mysqli_fetch_array($resultado_impresion)){

  if($fila['nombre_e']==$espacio && $fila['estatus_e']==$estatus_cambio){
    $us=$fila['usuario'];
    $id_e=$fila['id_e'];
    $con="INSERT INTO salidas_e (fecha_salida, hora_salida, espacio, usuario) VALUES (NOW(),NOW(),'$espacio', '$us')";
    $resultado=mysqli_query($miConexion,$con);
    $Actualizar_registro="UPDATE espacios_e SET estatus_e='$estatus_cambio2', usuario='$usuario2' WHERE id_e='$id_e'";
    $resultado_eliminar= mysqli_query($miConexion, $Actualizar_registro);
    
}
}



?>
