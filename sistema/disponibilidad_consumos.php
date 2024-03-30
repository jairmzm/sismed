<?php
require 'head.php';
require '../conexion.php';
// $mostrar="SELECT *FROM disponibilidad";
// $consulta_mostrar=mysqli_query($conexion,$mostrar);

$mensage="SELECT *FROM message";
$coonsulta_message=mysqli_query($conexion,$mensage);
$query=mysqli_query($conexion,"SELECT *FROM establecimiento");

 ?>
 <div class="card mb-4">
     <div class="card-header">
         <i class="fas fa-table me-1"></i>
      Requerimiento Consumos y Disponibilidad de Medicamentos e Insumos
     </div>
     <br>
     <div class="alert alert-success" role="alert">
       <?php
     while($dat=mysqli_fetch_array($coonsulta_message)){
       echo $dat['mensaje']." ".$dat['date_timess'];
     }

        ?>
     </div>

     <div class="card-body">
<form class="" action="exel_consumos.php" method="post">
  <label for="">Seleccione Establecimiento: </label>
  <div class="col-md-4 mb-3">
    <label for="validationServer01"></label>
    <select class="form-control is-valid" id="establecimiento" name="establecimiento" >
      <option value="">Seleccione Establecimiento</option>
      <?php while ($valores=mysqli_fetch_array($query)) { ?>
        <option  value="<?php echo $valores['nombre_establecimiento'] ?>"><?php echo $valores['nombre_establecimiento'] ?></option>
      <?php }  ?>
    </select> <br>
    <label for="">Ingrese para cuantos meses</label>
    <input type="number" class="form-control is-valid" id="requerimiento_meses" name="requerimiento_meses" min="1" max="10" required>
<br>
<label for="">Seleccione</label><br>
 <label for="">Solo Esenciales </label> <input type="checkbox" name="esenciales" value="S"> <br>

<input type="submit" name="requerimiento" value="Exportar Requerimiento" class="btn btn-success">
  </div>
</form>
     </div>
 </div>
<?php
require 'footer.php';

?>
