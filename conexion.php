<?php
session_start();
$host=$_ENV["DB_HOST"];
$username=$_ENV["DB_USER"];
$pass=$_ENV["DB_PASSWORD"];
$database=$_ENV["DB_NAME"];

$conexion=mysqli_connect($host,$username,$pass,$database);

//$prueba=mysqli_query($conexion,"SELECT * FROM registrar");
//print_r($prueba);

//if (!$conexion) {
  //  die("Connection failed: " . mysqli_connect_error());
//}
//echo "Connected successfully";
//mysqli_close($conexion);
 ?>
