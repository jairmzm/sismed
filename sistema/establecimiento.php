<?php

require 'head.php';


require '../conexion.php';
$mostrar="SELECT nombres,apellidos,dni,correo,celular,id_establecimiento,profesion FROM registrar";
$consulta_mostrar=mysqli_query($conexion,$mostrar);
$query=mysqli_query($conexion,"SELECT *FROM establecimiento");

 ?>
 <main>


                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Registrar Establecimiento de Salud</h1>

                        <div class="row">


<form class="" action="registrar_establecimiento.php" method="post">
<div class="form-row">
  <div class="col-md-4 mb-3">
    <label for="validationServer01">Microred</label>
    <select class="form-control is-valid" name="microred" id="microred">
      <option  value="-">Seleccione Microred</option>
      <option  value="CENTENARIO">CENTENARIO</option>
      <option  value="CURAHUASI">CURAHUASI</option>
      <option  value="HUANCARAMA">HUANCARAMA</option>
      <option  value="LAMBRAMA">LAMBRAMA</option>
      <option  value="MICAELA BASTIDAS">MICAELA BASTIDAS</option>
      <option  value="NO TIENE ASIGNADO NINGUNA MICRORED">NO TIENE ASIGNADO NINGUNA MICRORED</option>

      </select>
  </div>
  <div class="col-md-4 mb-3">
    <label for="validationServer02">Codigo Establecimiento</label>
    <input type="text" class="form-control is-valid" name="cod_eess" id="cod_eess" placeholder="Ingrese Codigo del Establecimiento" value="" required>
  </div>
  <div class="col-md-4 mb-3">
    <label for="validationServer01">Nombre Establecimiento</label>
    <input type="text" class="form-control is-valid" name="nombre_eess" id="nombre_eess" placeholder="Ingrese Nombre del EstablecimientoI" value="" required>
  </div>
  <div class="col-md-4 mb-3">
    <label for="validationServer01">Categoria Establecimieto</label>
    <select class="form-control is-valid" name="cat_eess" id="cat_eess">
      <option  value="-">Seleccione Categoria</option>
      <option  value="I-1">I-1</option>
      <option  value="I-2">I-2</option>
      <option  value="I-3">I-3</option>
      <option  value="I-4">I-4</option>
      <option  value="-">Sin Categoria</option>

      </select>
  </div>

  <div class="col-md-4 mb-3">
    <label for="validationServer01">Punto de Digitacion</label>
    <select class="form-control is-valid" name="punto_digitacion" id="punto_digitacion">
      <option  value="-">SI / NO</option>
      <option  value="SI">SI</option>
      <option  value="NO">NO</option>

      </select>
  </div>


</div>


<button class="btn btn-primary" type="submit">Registrar Establecimiento</button>
</form>

                        </div>


                    </div>
                </main>
<?php
require 'footer.php';

?>
