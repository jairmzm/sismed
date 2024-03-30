<?php
require '../conexion.php';

$id=$_GET['id'];
$consulta="DELETE FROM upload WHERE id='$id'";
$ejecutar_query=mysqli_query($conexion,$consulta);
header("Location:registrar_archivos.php");
 ?>
