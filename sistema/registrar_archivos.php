<?php

require 'head.php';
require '../conexion.php';
$conn=new PDO('mysql:host=localhost; dbname=farmacia', 'root', '') or die(mysql_error());
if(isset($_POST['submit'])!=""){
  $name=$_FILES['file']['name'];
  $size=$_FILES['file']['size'];
  $type=$_FILES['file']['type'];
  $temp=$_FILES['file']['tmp_name'];


  $mensaje=$_POST['mensaje'];
  // $caption1=$_POST['caption'];
  // $link=$_POST['link'];
  $fname = date("YmdHis").'_'.$name;
  $chk = $conn->query("SELECT * FROM  upload where name = '$name' ")->rowCount();
  if($chk){
    $i = 1;
    $c = 0;
	while($c == 0){
    	$i++;
    	$reversedParts = explode('.', strrev($name), 2);
    	$tname = (strrev($reversedParts[1]))."_".($i).'.'.(strrev($reversedParts[0]));
    // var_dump($tname);exit;
    	$chk2 = $conn->query("SELECT * FROM  upload where name = '$tname' ")->rowCount();
    	if($chk2 == 0){
    		$c = 1;
    		$name = $tname;
    	}
    }
}
 $move =  move_uploaded_file($temp,"upload/".$fname);
 if($move){
 	$query=$conn->query("INSERT INTO upload (name,fname,mensaje) VALUES ('$name','$fname','$mensaje')");
	if($query){
	// header("location:registrar_archivos.php");
  echo '<br> <br> <div class="alert alert-success" role="alert">  Subido Exitosamente </div>"';
	}
	else{
	die(mysql_error());
	}
 }
}
 ?>
 <main>


                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Subir Archivos </h1>

                        <div class="row">


<form enctype="multipart/form-data" action="" name="form" method="post">
<div class="form-row">

  <div class="col-md-4 mb-3">
    <label for="validationServer02">Seleccione Archivo</label>
    <input type="file" class="form-control is-valid" name="file" id="file" placeholder="Seleccione Archivo" value="" required> <br>
    <input type="text" class="form-control is-valid" name="mensaje" id="mensaje" placeholder="Escriba el mensaje" required>
  </div>
</div>
<input type="submit" name="submit" value="Subir Archivo" class="btn btn-success">
<br>
</form>
<br>
<br>
  </div>
                    </div>
                    <br>
                  <br>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Reporte de Archivos - Red de Salud Abancay
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Archivos</th>
                                        <th>Mensaje</th>
                                        <th>Fecha</th>
                                        <th>Accion </th>

                                   </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                      <th>Archivos</th>
                                      <th>Mensaje</th>
                                      <th>Fecha</th>
                                      <th>Accion </th>


                                    </tr>
                                </tfoot>
                                <tbody>
                                  <?php
                                  $query=$conn->query("SELECT *FROM upload ORDER BY id DESC");
                                  while ($row=$query->fetch()){ ?>

                                    <tr>

                                      <td><?php echo $row['name']; ?></td>
                                      <td><?php echo $row['mensaje']; ?></td>
                                      <td><?php echo $row['date_time']; ?></td>


                                     <td> <button class="alert-success"><a href="download.php?filename=<?php echo $row['name'];?>&f=<?php echo $row['fname'] ?>">Descargar</a></button>
                                       <?php if ($_SESSION['rol']==1){ ?>
                                         <a href="eliminar_archivo.php?id=<?= $row['id']?>">  <button type="button" class="btn btn-danger">Eliminar Archivo</button></a>
                                      <?php  } ?>



                                    </td>

                                    </tr>
                          <?php        } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </main>
<?php
require 'footer.php';
?>
