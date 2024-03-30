<?php
require 'head.php';
require '../conexion.php';
$mostrar="SELECT *FROM establecimiento ORDER BY microred";
$consulta_mostrar=mysqli_query($conexion,$mostrar);
 ?>
 <div class="card mb-4">
     <div class="card-header">
         <i class="fas fa-table me-1"></i>
         Reporte de Establecimientos - Red de Salud Abancay
     </div>
     <div class="card-body">
         <table id="datatablesSimple">
             <thead>
                 <tr>
                     <th>MICRORED</th>
                     <th>CODIGO </th>
                     <th>NOMBRE</th>
                     <th>CATEGORIA</th>
                     <th>PUNTO</th>
                     <th>Acciones</th>
                </tr>
             </thead>
             <tfoot>
                 <tr>
                   <th>MICRORED</th>
                   <th>CODIGO </th>
                   <th>NOMBRE</th>
                   <th>CATEGORIA</th>
                   <th>PUNTO</th>
                   <th>Acciones</th>
                 </tr>
             </tfoot>
             <tbody>
               <?php while ($datos=mysqli_fetch_array($consulta_mostrar)){ ?>
                 <tr>

                   <td><?php echo $datos['microred']; ?></td>
                   <td><?php echo $datos['cod_est']; ?></td>
                   <td><?php echo $datos['nombre_establecimiento']; ?></td>
                   <td><?php echo $datos['cat_establecimiento']; ?></td>
                   <td><?php echo $datos['punto_digitacion']; ?></td>
                  <td> <a href="edit_establecimiento.php?id=<?= $datos['id_establecimiento']?>">  <button type="button" class="btn btn-success">Editar</button></a>
<a href="eliminar_establecimiento.php?id=<?= $datos['id_establecimiento']?>">  <button type="button" class="btn btn-danger">Eliminar</button></a>
                  </td>

                 </tr>
       <?php        } ?>

             </tbody>
         </table>
     </div>
 </div>
<?php
require 'footer.php';

?>
