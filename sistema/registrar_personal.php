<?php

require 'head.php';


require '../conexion.php';
$mostrar="SELECT nombres,apellidos,dni,correo,celular,id_establecimiento,profesion FROM registrar";
$consulta_mostrar=mysqli_query($conexion,$mostrar);
$query=mysqli_query($conexion,"SELECT *FROM establecimiento");

 ?>
 <main>


                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Registrar Personal</h1>

                        <div class="row">


<form class="" action="guardar_personal.php" method="post">
<div class="form-row">
  <div class="col-md-4 mb-3">
    <label for="validationServer01">Nombres</label>
    <input type="text" class="form-control is-valid" name="nombre_personal" id="nombre_personal" pattern="[A-Za-z\s]+" placeholder="Ingrese su Nombre" value="" required>
  </div>
  <div class="col-md-4 mb-3">
    <label for="validationServer02">Apellidos</label>
    <input type="text" class="form-control is-valid" name="apellido_personal" id="apellido_personal" pattern="[A-Za-z\s]+" placeholder="Ingrese su Apellido" value="" required>
  </div>
  <div class="col-md-4 mb-3">
    <label for="validationServer01">DNI</label>
    <input type="text" class="form-control is-valid" name="dni_personal" id="dni_personal" placeholder="Ingrese su DNI" value="" required>
  </div>
  <div class="col-md-4 mb-3">
    <label for="validationServer01">Correo</label>
    <input type="text" class="form-control is-valid" name="correo" id="correo" placeholder="Ingrese su Correo" value="" required>
  </div>

  <div class="col-md-4 mb-3">
    <label for="validationServer01">Celular</label>
    <input type="text" class="form-control is-valid" name="celular" id="celular" placeholder="Ingrese su numero de Celular" value="" required>
  </div>
  <div class="col-md-4 mb-3">
    <label for="validationServer01">Establecimiento</label>
    <select class="form-control is-valid" id="establecimiento" name="establecimiento">
      <option value="" selected disabled>-- Seleccione Establecimiento --</option>
      <?php while ($valores=mysqli_fetch_array($query)) { ?>
        <option  value="<?php echo $valores['id_establecimiento'] ?>"><?php echo $valores['nombre_establecimiento'] ?></option>

      <?php }  ?>

    </select>

  </div>
  <div class="col-md-4 mb-3">
    <label for="validationServer01">Profesion</label>
    <select class="form-control is-valid" name="profesion" id="profesion">

      <option  value="" selected disabled>-- SELECCIONE PROFESION --</option>
      <option  value="ING. INFORMATICA Y SISTEMAS">ING. INFORMATICA Y SISTEMAS</option>
      <option  value="Q.F. FARMACEUTICO">Q.F. FARMACEUTICO</option>
      <option  value="LIC. EN ENFERMERIA">LIC. EN ENFERMERIA</option>
      <option  value="OBSTETRA">OBSTETRA</option>
      <option  value="MEDICO CIRUJANO DENTAL">MEDICO CIRUJANO DENTAL</option>
      <option  value="ADMINISTRADOR/CONTADOR">ADMINISTRADOR/CONTADOR</option>
      <option  value="TEC. EN ENFERMERIA">TEC. EN ENFERMERIA</option>
      <option  value="TEC. EN FARMACIA">TEC. EN FARMACIA</option>
      <option  value="TEC. EN LABORATORIO">TEC. EN LABORATORIO</option>
      <option  value="TEC. EN COMPUTACION">TEC. EN COMPUTACION</option>

      </select>
  </div>
</div>


<button class="btn btn-primary" type="submit">Registrar Personal</button>
</form>

                        </div>


                    </div>
                </main>
<?php
require 'footer.php';

?>
