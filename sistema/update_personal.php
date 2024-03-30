<?php
require '../conexion.php';
$id_personal=$_POST['id_reg'];
$nombre_personal=$_POST['nombre_personal'];
$apellido_personal=$_POST['apellido_personal'];
$dni_personal=$_POST['dni_personal'];
$correo=$_POST['correo'];
$celular=$_POST['celular'];
$establecimiento=$_POST['establecimiento'];
$profesion=$_POST['profesion'];

$consulta="UPDATE registrar SET nombres='$nombre_personal',apellidos='$apellido_personal',dni= '$dni_personal', correo='$correo',celular='$celular',id_establecimiento='$establecimiento',profesion='$profesion' WHERE id_reg=$id_personal ";
$ejecutar_query=mysqli_query($conexion,$consulta);
header("Location:reporte_personal.php");
 ?>
