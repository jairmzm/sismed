<?php

require 'head.php';
require '../conexion.php';

 ?>
 <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Reporte de Movimientos - Almacen Especializado</h1>

                        <div class="row">
<form class="" action="reporte_fuente_financiamiento.php" method="post">
<div class="form-row">
  <div class="col-md-4 mb-3">
    <select class="form-control is-valid" name="ingresos_salidas" id="ingresos_salidas">
      <option  value="-">Ingresos / Salidas</option>
      <option  value="E">Ingresos</option>
      <option  value="S">Salidas</option>


      </select>
  </div>
  <div class="col-md-4 mb-3">
    <label for="validationServer01">Fuente de Financiamiento</label>

    <select class="form-control is-valid" name="fuente_financiamiento" id="fuente_financiamiento">
      <option  value="-">Seleccione Fuente</option>
      <option  value="ROR">Recursos Ordinarios (ROR)</option>
      <option  value="RDR">Recursos Directamente Recaudados (RDR)</option>
      <option  value="ROP">Recusos por Operaciones Oficiales de Credito (ROP)</option>
      <option  value="DYT">Donaciones y Transferencias (DYT)</option>
      <option  value="RDE">Recursos Determinados (RDE)</option>
      <option  value="CON">Contribuciones a Fondos (CON)</option>
      <option  value="IMU">Impuestos Municipales (IMU)</option>
      <option  value="CAN">Canon Sobrecanon (CAN)</option>
      <option  value="DON">DONACIONES (DON)</option>
      <option  value="V25">SIN DEFINIR F.FINAN. VERSION 2.5</option>

      </select>
  </div>
  <div class="col-md-4 mb-3">
    <label for="validationServer02">Fecha de Inicio</label>
    <input type="date" class="form-control is-valid" name="fecha_inicio" id="fecha_inicio" placeholder="Ingrese Fecha de Inicio" value="" required>
  </div>
  <div class="col-md-4 mb-3">
    <label for="validationServer01">Fecha de Fin</label>
    <input type="date" class="form-control is-valid" name="fecha_fin" id="fecha_fin" placeholder="Ingrese Fecha de Fin" value="" required>
  </div>


</div>


<button class="btn btn-primary" type="submit">Ver Reporte</button>
</form>

                        </div>


                    </div>
                </main>
<?php
require 'footer.php';

?>
