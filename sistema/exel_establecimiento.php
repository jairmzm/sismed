<?php
require '../conexion.php';
$mostrar="SELECT * FROM establecimiento";
$consulta_mostrar=mysqli_query($conexion,$mostrar);
header("content-Type: application/xls");
header("Content-Disposition: attachment; filename=Reporte_Establecimiento.xls");



 ?>
 <table id="datatablesSimple">
     <thead>
         <tr>

             <th>MICRORED</th>
             <th>CODIGO ESTABLECIMIENTO</th>
             <th>NOMBRE ESTABLECIMIENTO</th>
             <th>CATEGORIA ESTABLECIMIENTO</th>
             <th>PUNTO DE DIGITACION</th>


         </tr>
     </thead>

     <tbody>
       <?php while ($datos=mysqli_fetch_array($consulta_mostrar)){ ?>
         <tr>

           <td><?php echo $datos['microred']; ?></td>
           <td><?php echo $datos['cod_est']; ?></td>
           <td><?php echo $datos['nombre_establecimiento']; ?></td>
           <td><?php echo $datos['cat_establecimiento']; ?></td>
           <td><?php echo $datos['punto_digitacion']; ?></td>



         </tr>
 <?php        } ?>








     </tbody>
 </table>
