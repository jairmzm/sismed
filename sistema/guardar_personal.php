<?php
require '../conexion.php';
$nombre_personal=$_POST['nombre_personal'];
$apellido_personal=$_POST['apellido_personal'];
$dni_personal=$_POST['dni_personal'];
$correo=$_POST['correo'];
$celular=$_POST['celular'];
$establecimiento=$_POST['establecimiento'];
$profesion=$_POST['profesion'];

$consulta="INSERT INTO registrar (nombres,apellidos,dni,correo,celular,id_establecimiento,profesion) VALUES ('$nombre_personal','$apellido_personal','$dni_personal','$correo','$celular','$establecimiento','$profesion')";
$ejecutar_query=mysqli_query($conexion,$consulta);
header("Location:reporte_personal.php");
 ?>
