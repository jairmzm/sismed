<?php
require 'head.php';
require '../conexion.php';
$establecimiento=$_POST['establecimiento'];
/* if (empty($establecimiento)){
 header("Location:consulta_semaforo.php");
}*/

$mostrar="SELECT *FROM semaforo WHERE establecimiento='$establecimiento' ORDER BY FEC_EXP";
$consulta_mostrar=mysqli_query($conexion,$mostrar);
 ?>
 <div class="card mb-4">
     <div class="card-header">
         <i class="fas fa-table me-1"></i>
         Reporte de Medicamentos o Insumos vencidos o proximos a vencer
     </div>
     <div class="card-body">
         <table id="datatablesSimple">
             <thead>
                 <tr>

                     <th>MICRORED</th>
                     <th>COD_EESS</th>
                     <th>ESTABLECIMIENTO</th>
                     <th>CATEGORIA</th>
                     <th>COD_MED</th>
                     <th>DESCRIPCION</th>
                     <th>MEDFF</th>
                     <th>MEDTIP</th>
                     <th>MEDPET</th>
                     <th>MEDEST</th>
                     <th>FEC_EXP</th>
                     <th>LOTE</th>
                     <th>R.S.</th>
                     <th>TIP_SUM</th>
                     <th>FFINAN</th>
                     <th>STOCK</th>
                     <th>Estado</th>
                 </tr>
             </thead>
             <tfoot>
                 <tr>
                   <th>MICRORED</th>
                   <th>COD_EESS</th>
                   <th>ESTABLECIMIENTO</th>
                   <th>CATEGORIA</th>
                   <th>COD_MED</th>
                   <th>DESCRIPCION</th>
                   <th>MEDFF</th>
                   <th>MEDTIP</th>
                   <th>MEDPET</th>
                   <th>MEDEST</th>
                   <th>FEC_EXP</th>
                   <th>LOTE</th>
                   <th>R.S.</th>
                   <th>TIP_SUM</th>
                   <th>FFINAN</th>
                   <th>STOCK</th>
                   <th>Estado</th>
                 </tr>
             </tfoot>
             <tbody>
               <?php while ($datos=mysqli_fetch_array($consulta_mostrar)){ ?>
                 <tr>
                    <?php
                    $dia=intval(date("d"));
                    $mes=intval(date("m"));
                    $anio=intval(date("Y"));
                    $diferecia_dia=$datos['dia']-$dia;
                    $diferencia_mes=$datos['mes']-$mes;
                    $diferencia_anio=$datos['anio']-$anio;
                    $convertir_dia=$diferecia_dia*1;
                    $convertir_mes_dia=$diferencia_mes*30;
                    $convertir_anio_dia=$diferencia_anio*365;
                    $total_dias=  $convertir_dia+$convertir_mes_dia+$convertir_anio_dia;
                     ?>
                   <td><?php echo $datos['microred']; ?></td>
                   <td><?php echo $datos['cod_eess']; ?></td>
                   <td><?php echo $datos['establecimiento']; ?></td>
                   <td><?php echo $datos['categoria']; ?></td>
                   <td><?php echo $datos['cod_med']; ?></td>
                   <td><?php echo $datos['descripcion']; ?></td>
                   <td><?php echo $datos['MEDFF']; ?></td>
                   <td><?php echo $datos['MEDTIP']; ?></td>
                   <td><?php echo $datos['MEDPET']; ?></td>
                   <td><?php echo $datos['MEDEST']; ?></td>
                   <td><?php echo $datos['FEC_EXP']; ?></td>
                   <td><?php echo $datos['MEDLOTE']; ?></td>
                   <td><?php echo $datos['MEDREGSAN']; ?></td>
                   <td><?php echo $datos['TIPSUM2']; ?></td>
                   <td><?php echo $datos['FFINAN']; ?></td>
                   <td><?php echo $datos['STOCK_FIN1']; ?></td>
                  <td><?php //echo $total_dias;
                        if ($total_dias>1 && $total_dias<=180){
                          echo '<button type="button" class="btn btn-warning">Anaranjado</button>';
                        }
                        else {
                          if ($total_dias>180){
                            echo '<button type="button" class="btn btn-success">Verde</button>';
                          }
                          else {
                            echo '<button type="button" class="btn btn-danger">Rojo</button>';
                          }
                        }



                   ?></td>

                 </tr>
       <?php        } ?>

             </tbody>
         </table>
     </div>
 </div>
<?php
require 'footer.php';

?>
