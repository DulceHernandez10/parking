<?php
include 'dbconnect.php';
session_start();
$id_e=$_REQUEST['id_e'];
$estatus_cambio='Ocupado';
$usuario=$_SESSION['usuario_u'];


$Actualizar_registro="UPDATE espacios_e SET estatus_e='$estatus_cambio', usuario='$usuario' WHERE id_e='$id_e'";
$resultado_eliminar= mysqli_query($miConexion, $Actualizar_registro);
//echo "<a href='Consultas.php'> Regresar </a>";
header('Location: pagina_cliente.php');

?>