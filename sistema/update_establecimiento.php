<?php
require '../conexion.php';
$id_establecimiento=$_POST['id_establecimiento'];
$microred=$_POST['microred'];
$cod_eess=$_POST['cod_eess'];
$nombre_eess=$_POST['nombre_eess'];
$cat_esss=$_POST['cat_eess'];
$punto_digitacion=$_POST['punto_digitacion'];

$consulta="UPDATE establecimiento SET microred='$microred',cod_est='$cod_eess',nombre_establecimiento= '$nombre_eess', cat_establecimiento='$cat_esss',punto_digitacion='$punto_digitacion' WHERE id_establecimiento=$id_establecimiento ";
$ejecutar_query=mysqli_query($conexion,$consulta);
header("Location:reporte_establecimiento.php");
 ?>
