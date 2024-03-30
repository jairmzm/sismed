<?php
require 'head.php';
require '../conexion.php';
$id=$_GET['id'];

$mostrar_datos="SELECT *FROM establecimiento WHERE id_establecimiento='$id'";
$ejecutar_mostrar_datos=mysqli_query($conexion,$mostrar_datos);

 ?>
 <main>


                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Modificar Datos de Establecimiento de Salud</h1>

                        <div class="row">


<form class="" action="update_establecimiento.php" method="post">
  <?php while ($row=mysqli_fetch_array($ejecutar_mostrar_datos)) {  ?>

<input type="hidden" name="id_establecimiento" id="id_establecimiento" value="<?php echo $row['id_establecimiento']; ?>">
<div class="form-row">
  <div class="col-md-4 mb-3">
    <label for="validationServer01">Microred</label>
    <select class="form-control is-valid" name="microred" id="microred">
      <option  value="<?php echo $row['microred']; ?>"><?php echo $row['microred']; ?></option>
      <option  value="CENTENARIO">CENTENARIO</option>
      <option  value="CURAHUASI">CURAHUASI</option>
      <option  value="HUANCARAMA">HUANCARAMA</option>
      <option  value="LAMBRAMA">LAMBRAMA</option>
      <option  value="MICAELA BASTIDAS">MICAELA BASTIDAS</option>
      <option  value="SIN MICRORED">SIN MICRORED</option>

      </select>
  </div>
  <div class="col-md-4 mb-3">
    <label for="validationServer02">Codigo Establecimiento</label>
    <input type="text" class="form-control is-valid" name="cod_eess" id="cod_eess" placeholder="Ingrese Codigo del Establecimiento" value="<?php echo $row['cod_est']; ?>" required>
  </div>
  <div class="col-md-4 mb-3">
    <label for="validationServer01">Nombre Establecimiento</label>
    <input type="text" class="form-control is-valid" name="nombre_eess" id="nombre_eess" placeholder="Ingrese Nombre del EstablecimientoI" value="<?php echo $row['nombre_establecimiento']; ?>" required>
  </div>
  <div class="col-md-4 mb-3">
    <label for="validationServer01">Categoria Establecimieto</label>
    <select class="form-control is-valid" name="cat_eess" id="cat_eess">
      <option  value="<?php echo $row['cat_establecimiento']; ?>"><?php echo $row['cat_establecimiento']; ?></option>
      <option  value="I-1">I-1</option>
      <option  value="I-2">I-2</option>
      <option  value="I-3">I-3</option>
      <option  value="I-4">I-4</option>
      <option  value="S-C">Sin Categoria</option>

      </select>
  </div>

  <div class="col-md-4 mb-3">
    <label for="validationServer01">Punto de Digitacion</label>
    <select class="form-control is-valid" name="punto_digitacion" id="punto_digitacion">
      <option  value="<?php echo $row['punto_digitacion']; ?>"><?php echo $row['punto_digitacion']; ?></option>
      <option  value="SI">SI</option>
      <option  value="NO">NO</option>

      </select>
  </div>


</div>
<?php  } ?>

<button class="btn btn-success" type="submit">Editar Establecimiento</button>
</form>

                        </div>


                    </div>
                </main>
<?php
require 'footer.php';

?>
