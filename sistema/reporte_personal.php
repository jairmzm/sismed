<?php
require 'head.php';
require '../conexion.php';
$mostrar="SELECT id_reg,nombres,apellidos,dni,correo,celular,establecimiento.id_establecimiento as ee,microred,nombre_establecimiento,profesion FROM registrar INNER JOIN establecimiento  WHERE establecimiento.id_establecimiento=registrar.id_establecimiento";
$consulta_mostrar=mysqli_query($conexion,$mostrar);
 ?>

 <div class="card mb-4">
     <div class="card-header">
         <i class="fas fa-table me-1"></i>
         Reporte del Personal de la Red de Salud Abancay <a href="exel_personal.php"><button type="button" class="btn btn-success" name="button">Excel</button></a>  <a href="pdf_personal.php"><button type="button" class="btn btn-danger" name="button">Pdf</button></a>
     </div>
     <div class="card-body">
         <table id="datatablesSimple">
             <thead>
                 <tr>

                     <th>Nombres</th>
                     <th>Apellidos</th>
                     <th>DNI</th>
                     <th>Correo</th>
                     <th>Celular</th>
                     <th>Microred</th>
                     <th>Establecimiento</th>
                     <th>Profesion</th>
                     <th>Accion</th>
                 </tr>
             </thead>
             <tfoot>
                 <tr>
                   <th>Nombres</th>
                   <th>Apellidos</th>
                   <th>DNI</th>
                   <th>Correo</th>
                   <th>Celular</th>
                    <th>Microred</th>
                   <th>Establecimiento</th>
                   <th>Profesion</th>
                   <th>Accion</th>
                 </tr>
             </tfoot>
             <tbody>
               <?php while ($datos=mysqli_fetch_array($consulta_mostrar)){ ?>
                 <tr>

                   <td><?php echo $datos['nombres']; ?></td>
                   <td><?php echo $datos['apellidos']; ?></td>
                   <td><?php echo $datos['dni']; ?></td>
                   <td><?php echo $datos['correo']; ?></td>
                   <td><?php echo $datos['celular']; ?></td>
                   <td><?php echo $datos['microred']; ?></td>
                   <td><?php echo $datos['nombre_establecimiento']; ?></td>
                   <td><?php echo $datos['profesion']; ?></td>
                   <?php if ($_SESSION['rol'] == 1){     ?>
                  <td> <a href="edit_personal.php?id=<?= $datos['id_reg']."&eess=".$datos['nombre_establecimiento']."&xs=".$datos['ee']?>">  <button type="button" class="btn btn-success">Editar</button></a>
<a href="eliminar_personal.php?id=<?= $datos['id_reg']?>">  <button type="button" class="btn btn-danger">Eliminar</button></a>
                  </td>
                <?php } else {
                  echo '<td><button type="button" class="btn btn-primary">...</button></td>';
                } ?>
                 </tr>
       <?php        } ?>

             </tbody>
         </table>
     </div>
 </div>
<?php
require 'footer.php';

?>
