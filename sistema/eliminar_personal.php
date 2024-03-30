<?php
require '../conexion.php';

$id=$_GET['id'];
$consulta="DELETE FROM registrar WHERE id_reg='$id'";
$ejecutar_query=mysqli_query($conexion,$consulta);
header("Location:reporte_personal.php");
 ?>
