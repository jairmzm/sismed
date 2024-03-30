

<?php require 'head.php';


$mensage="SELECT *FROM message";
$coonsulta_message=mysqli_query($conexion,$mensage);
 ?>
<br>
<div class="alert alert-success" role="alert">
  <?php
while($dat=mysqli_fetch_array($coonsulta_message)){
  echo $dat['mensaje']." ".$dat['date_timess'];
}

   ?>
</div>
<form class="" action="reportes_disponibilidad.php" method="post">
  <h1>CONSULTAR DISPONIBILIDAD DE MEDICAMENTOS POR MICRORED</h1> <br>
  <select class="form-select" aria-label="Default select example" name="anio" id="anio">
    <option selected>SELECCIONE AÑO</option>
    <option value="2023">2023</option>

  </select>

  <br>
  <select class="form-select" aria-label="Default select example" name="mes" id="mes">
    <option selected>SELECCIONE MES</option>
    <option value="enero">ENERO</option>
    <option value="febrero">FEBRERO</option>
    <option value="marzo">MARZO</option>
    <option value="abril">ABRIL</option>
    <option value="mayo">MAYO</option>
    <option value="junio">JUNIO</option>
    <option value="julio">JULIO</option>
    <option value="agosto">AGOSTO</option>
    <option value="setiembre">SETIEMBRE</option>
    <option value="octubre">OCTUBRE</option>
    <option value="noviembre">NOVIEMBRE</option>
    <option value="diciembre">DICIEMBRE</option>
  </select>

  <br>
  <select class="form-select" aria-label="Default select example" name="saber" id="saber">
    <option selected>QUE DESEA SABER</option>
    <option value="disponibilidad">% DE DISPONIBILIDAD</option>
    <option value="desabastecido">%DESABASTECIDO</option>
    <option value="substock">%SUBSTOCK</option>
    <option value="normostock">%NORMOSTOCK</option>
    <option value="sobrestock">%SOBRESTOCK</option>

  </select> <br>
  <input type="submit" name="consultar" value="CONSULTAR" class="btn btn-success">

</form>

<form class="" action="consultamicrored_eess.php" method="post">
  <h1>CONSULTAR DISPONIBILIDAD DE MEDICAMENTOS POR MICRORED Y ESTABLECIMIENTO</h1> <br>
  <select class="form-select" aria-label="Default select example" name="microred" id="microred">
    <option selected>SELECCIONE MICRORED</option>
    <option value="CENTENARIO">CENTENARIO</option>
    <option value="CURAHUASI">CURAHUASI</option>
    <option value="HUANCARAMA">HUANCARAMA</option>
    <option value="LAMBRAMA">LAMBRAMA</option>
    <option value="MICAELA BASTIDAS">MICAELA BASTIDAS</option>
    <option value="NO TIENE ASIGNADO NINGUNA MICRORED">NO TIENE ASIGNADO NINGUNA MICRORED</option>
  </select> <br>
  <select class="form-select" aria-label="Default select example" name="anio" id="anio">
    <option selected>SELECCIONE AÑO</option>
    <option value="2023">2023</option>

  </select>

  <br>
  <select class="form-select" aria-label="Default select example" name="mes" id="mes">
    <option selected>SELECCIONE MES</option>
    <option value="enero">ENERO</option>
    <option value="febrero">FEBRERO</option>
    <option value="marzo">MARZO</option>
    <option value="abril">ABRIL</option>
    <option value="mayo">MAYO</option>
    <option value="junio">JUNIO</option>
    <option value="julio">JULIO</option>
    <option value="agosto">AGOSTO</option>
    <option value="setiembre">SETIEMBRE</option>
    <option value="octubre">OCTUBRE</option>
    <option value="noviembre">NOVIEMBRE</option>
    <option value="diciembre">DICIEMBRE</option>
  </select>

  <br>
  <select class="form-select" aria-label="Default select example" name="saber" id="saber">
    <option selected>QUE DESEA SABER</option>
    <option value="disponibilidad">% DE DISPONIBILIDAD</option>
    <option value="desabastecido">%DESABASTECIDO</option>
    <option value="substock">%SUBSTOCK</option>
    <option value="normostock">%NORMOSTOCK</option>
    <option value="sobrestock">%SOBRESTOCK</option>

  </select> <br>
  <input type="submit" name="consultar" value="CONSULTAR" class="btn btn-success">

</form>

<?php
require 'footer.php';

?>
