<?php
require 'head.php';
require '../conexion.php';
$mensage="SELECT *FROM message";
$coonsulta_message=mysqli_query($conexion,$mensage);
$query=mysqli_query($conexion,"SELECT *FROM establecimiento");

 ?>
 <main>
   <div class="alert alert-success" role="alert">
     <?php
   while($dat=mysqli_fetch_array($coonsulta_message)){
     echo $dat['mensaje']." ".$dat['date_timess'];
   }

      ?>
   </div>

                    <div class="container-fluid px-4">
                        <h1 class="mt-4">CONSULTAR FECHAS DE VECIMIENTO (semaforo)</h1>

                        <div class="row">
                          <br>
                          <br>
                          <a href="exel_semaforo.php"><button type="button" class="btn btn-success" name="button">Exportar Excel (Todos los Establecimientos)</button></a>
                          <br>


<form class="" action="semaforo.php" method="post">
<div class="form-row">
  <div class="col-md-4 mb-3">
    <label for="validationServer01">Establecimiento</label>
    <select class="form-control is-valid" id="establecimiento" name="establecimiento">
      <option value="">Seleccione Establecimiento</option>
      <?php while ($valores=mysqli_fetch_array($query)) { ?>
        <option  value="<?php echo $valores['nombre_establecimiento'] ?>"><?php echo $valores['nombre_establecimiento'] ?></option>
      <?php }  ?>
    </select>
  </div>

</div>

<button class="btn btn-primary" type="submit">Verificar</button> 
</form>

                        </div>


                    </div>
                </main>
<?php
require 'footer.php';

?>
