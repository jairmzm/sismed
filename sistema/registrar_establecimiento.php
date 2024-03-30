<?php
require '../conexion.php';
$microred=$_POST['microred'];
$cod_eess=$_POST['cod_eess'];
$nombre_eess=$_POST['nombre_eess'];
$cat_esss=$_POST['cat_eess'];
$punto_digitacion=$_POST['punto_digitacion'];
$sql="INSERT INTO establecimiento (microred,cod_est,nombre_establecimiento,cat_establecimiento,punto_digitacion) VALUES ('$microred','$cod_eess','$nombre_eess','$cat_esss','$punto_digitacion')";
$ejecutar_query=mysqli_query($conexion,$sql);
header("Location:establecimiento.php");
 ?>
