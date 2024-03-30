<?php

require 'head.php';

require '../conexion.php';
$id=$_GET['id'];
$eess=$_GET['eess'];
$xs=$_GET['xs'];
$mostrar="SELECT nombres,apellidos,dni,correo,celular,id_establecimiento,profesion FROM registrar";
$consulta_mostrar=mysqli_query($conexion,$mostrar);
$query=mysqli_query($conexion,"SELECT *FROM establecimiento");
//codigo para mostrar los datos y actualizar update
$mostrar_datos="SELECT *FROM registrar WHERE id_reg='$id'";
$ejecutar_mostrar_datos=mysqli_query($conexion,$mostrar_datos);

 ?>

 <main>


                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Registrar Personal</h1>

                        <div class="row">


<form class="" action="update_personal.php" method="post">
  <?php while ($row=mysqli_fetch_array($ejecutar_mostrar_datos)) { ?>
    <input type="hidden" name="id_reg" name="id_reg" value="<?php echo $row['id_reg']; ?>">
<div class="form-row">
  <div class="col-md-4 mb-3">
    <label for="validationServer01">Nombres</label>
    <input type="text" class="form-control is-valid" name="nombre_personal" id="nombre_personal" placeholder="Ingrese su Nombre" value="<?php echo $row['nombres']; ?>" required>
  </div>
  <div class="col-md-4 mb-3">
    <label for="validationServer02">Apellidos</label>
    <input type="text" class="form-control is-valid" name="apellido_personal" id="apellido_personal" placeholder="Ingrese su Apellido" value="<?php echo $row['apellidos']; ?>" required>
  </div>
  <div class="col-md-4 mb-3">
    <label for="validationServer01">DNI</label>
    <input type="text" class="form-control is-valid" name="dni_personal" id="dni_personal" placeholder="Ingrese su DNI" value="<?php echo $row['dni']; ?>" required>
  </div>
  <div class="col-md-4 mb-3">
    <label for="validationServer01">Correo</label>
    <input type="text" class="form-control is-valid" name="correo" id="correo" placeholder="Ingrese su Correo" value="<?php echo $row['correo']; ?>" required>
  </div>

  <div class="col-md-4 mb-3">
    <label for="validationServer01">Celular</label>
    <input type="text" class="form-control is-valid" name="celular" id="celular" placeholder="Ingrese su numero de Celular" value="<?php echo $row['celular']; ?>" required>
  </div>
  <div class="col-md-4 mb-3">
    <label for="validationServer01"></label>
    <select class="form-control is-valid" name="profesion" id="profesion">

  <option  value="ING. INFORMATICA Y SISTEMAS"><?php echo $row['profesion']; ?></option>
      <option  value="ING. INFORMATICA Y SISTEMAS">ING. INFORMATICA Y SISTEMAS</option>
      <option  value="Q.F. FARMACEUTICO">Q.F. FARMACEUTICO</option>
      <option  value="LIC. EN ENFERMERIA">LIC. EN ENFERMERIA</option>
      <option  value="OBSTETRA">OBSTETRA</option>
      <option  value="MEDICO CIRUJANO DENTAL">MEDICO CIRUJANO DENTAL</option>
      <option  value="TEC. EN ENFERMERIA">TEC. EN ENFERMERIA</option>
      <option  value="TEC. EN FARMACIA">TEC. EN FARMACIA</option>
      <option  value="TEC. EN LABORATORIO">TEC. EN LABORATORIO</option>

      </select>
  </div>


  <div class="col-md-4 mb-3">
    <label for="validationServer01">Establecimiento</label>
    <select class="form-control is-valid" id="establecimiento" name="establecimiento">
      <option value="<?php echo $xs; ?>"><?php echo $eess ?></option>  <?php   } ?>
      <?php while ($valores=mysqli_fetch_array($query)) { ?>
        <option  value="<?php echo $valores['id_establecimiento'] ?>"><?php echo $valores['nombre_establecimiento'] ?></option>

      <?php }  ?>

    </select>

  </div>

</div>


<button class="btn btn-primary" type="submit">Editar datos </button>
</form>

                        </div>


                    </div>
                </main>
<?php
require 'footer.php';

?>
