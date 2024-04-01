<?php

	$db_host = 'sql302.infinityfree.com'; //Host del Servidor MySQL
	$db_name = 'if0_36272600_farmacia'; //Nombre de la Base de datos
	$db_user = 'if0_36272600'; //Usuario de MySQL
	$db_pass = 'iuIk6xdWwWy7T45'; //Password de Usuario MySQL

	$fecha = date("Ymd-His"); //Obtenemos la fecha y hora para identificar el respaldo

	// Construimos el nombre de archivo SQL Ejemplo: mibase_20170101-081120.sql
	$salida_sql = $db_name.'_'.$fecha.'.sql';

	//Comando para genera respaldo de MySQL, enviamos las variales de conexion y el destino
	$dump = "mysqldump --h$db_host -u$db_user -p$db_pass --opt $db_name > $salida_sql";
	system($dump, $output); //Ejecutamos el comando para respaldo

?>
