<?php
require '../conexion.php';
$establecimient=$_POST['establecimiento'];

if(isset($_REQUEST['esenciales'])){
  $esenciales=$_POST['esenciales'];
  $mostrar="SELECT COD_PRE,nombre_establecimiento,cat_establecimiento,COD_MED,descripcion_med,medff,medtip,medpet,medest,mes1,mes2,mes3,mes4,mes5,mes6,mes7,mes8,mes9,mes10,mes11,mes12,TOTAL,STOCK,CPA,meses_disp,disponibilidad,evalua FROM disponibilidad WHERE nombre_establecimiento='$establecimient' AND evalua='$esenciales'";
  $consulta_mostrar=mysqli_query($conexion,$mostrar);
}
else {
  $mostrar="SELECT COD_PRE,nombre_establecimiento,cat_establecimiento,COD_MED,descripcion_med,medff,medtip,medpet,medest,mes1,mes2,mes3,mes4,mes5,mes6,mes7,mes8,mes9,mes10,mes11,mes12,TOTAL,STOCK,CPA,meses_disp,disponibilidad,evalua FROM disponibilidad WHERE nombre_establecimiento='$establecimient'";
  $consulta_mostrar=mysqli_query($conexion,$mostrar);
}


header("content-Type: application/xls");
header("Content-Disposition: attachment; filename=Requerimiento_establecimiento.xls");



 ?>
 <table id="datatablesSimple">
     <thead>
         <tr>
           <th>COD_PRE </th>
           <th>ESTABLECIMIENTO</th>
           <th>CATEGORIA</th>
           <th>COD_MED</th>
           <th>DESCRIPCION </th>
           <th>MEDFF</th>
           <th>MEDTIP</th>
           <th>MEDPET</th>
           <th>MEDEST</th>
           <th>	MES1	</th>
           <th>	MES2	</th>
           <th>	MES3	</th>
           <th>	MES4	</th>
           <th>	MES5	</th>
           <th>	MES6	</th>
           <th>	MES7	</th>
           <th>	MES8	</th>
           <th>	MES9	</th>
           <th>	MES10	</th>
           <th>	MES11	</th>
           <th>	MES12	</th>
           <th>TOTAL</th>
           <th>STOCK</th>
           <th>CPA</th>
           <th>MESES_DISP</th>
           <th>Disponibilidad</th>
           <th>EVALUA</th>
            <th>REQUERIMIENTO</th>




         </tr>
     </thead>

     <tbody>
       <?php while ($datos=mysqli_fetch_array($consulta_mostrar)){ ?>
         <tr>
        <?php  $requerimiento=$_POST['requerimiento_meses']; ?>
           <td><?php echo $datos['COD_PRE']; ?></td>
           <td><?php echo $datos['nombre_establecimiento']; ?></td>
           <td><?php echo $datos['cat_establecimiento']; ?></td>
           <td><?php echo $datos['COD_MED']; ?></td>
           <td><?php echo $datos['descripcion_med']; ?></td>
           <td><?php echo $datos['medff']; ?></td>
           <td><?php echo $datos['medtip']; ?></td>
           <td><?php echo $datos['medpet']; ?></td>
           <td><?php echo $datos['medest']; ?></td>
           <td><?php echo $datos['mes1']; ?></td>
           <td><?php echo $datos['mes2']; ?></td>
           <td><?php echo $datos['mes3']; ?></td>
           <td><?php echo $datos['mes4']; ?></td>
           <td><?php echo $datos['mes5']; ?></td>
           <td><?php echo $datos['mes6']; ?></td>
           <td><?php echo $datos['mes7']; ?></td>
           <td><?php echo $datos['mes8']; ?></td>
           <td><?php echo $datos['mes9']; ?></td>
           <td><?php echo $datos['mes10']; ?></td>
           <td><?php echo $datos['mes11']; ?></td>
           <td><?php echo $datos['mes12']; ?></td>
           <td><?php echo $datos['TOTAL']; ?></td>
           <td><?php echo $datos['STOCK']; ?></td>
           <td><?php echo $datos['CPA']; ?></td>
           <td><?php echo $datos['meses_disp']; ?></td>
           <td><?php echo $datos['disponibilidad']; ?></td>
           <td><?php echo $datos['evalua']; ?></td>
           <td><?php echo ($datos['CPA']*$requerimiento)-$datos['STOCK']; ?></td>

                   </tr>
 <?php        } ?>








     </tbody>
 </table>
