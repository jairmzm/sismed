<?php
session_start();
$DB_HOST=$_ENV["DB_HOST"];
$DB_USER=$_ENV["DB_USER"];
$DB_PASSWORD=$_ENV["DB_PASSWORD"];
$DB_NAME=$_ENV["DB_NAME"];

$conexion=mysqli_connect("$DB_HOST","$DB_USER","$DB_PASSWORD","$DB_NAME");

//$prueba=mysqli_query($conexion,"SELECT * FROM registrar");
//print_r($prueba);

//if (!$conexion) {
  //  die("Connection failed: " . mysqli_connect_error());
//}
//echo "Connected successfully";
//mysqli_close($conexion);
 ?>
