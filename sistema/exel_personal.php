<?php
require '../conexion.php';
$mostrar="SELECT id_reg,nombres,apellidos,dni,correo,celular,establecimiento.id_establecimiento as ee,microred,cod_est,nombre_establecimiento,profesion,punto_digitacion FROM registrar INNER JOIN establecimiento  WHERE establecimiento.id_establecimiento=registrar.id_establecimiento";
$consulta_mostrar=mysqli_query($conexion,$mostrar);
header("content-Type: application/xls");
header("Content-Disposition: attachment; filename=Reporte_personal_farmacia.xls");



 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>


 <table id="datatablesSimple">
     <thead>
         <tr>

             <th>Nombres</th>
             <th>Apellidos</th>
             <th>DNI</th>
             <th>Correo</th>
             <th>Celular</th>
             <th>Microred</th>
             <th>Codigo</th>
             <th>Establecimiento</th>
             <th>Profesion</th>
             <th>Punto Digitacion</th>

         </tr>
     </thead>

     <tbody>
       <?php while ($datos=mysqli_fetch_array($consulta_mostrar)){ ?>
         <tr>

           <td><?php echo $datos['nombres']; ?></td>
           <td><?php echo $datos['apellidos']; ?></td>
           <td><?php echo $datos['dni']; ?></td>
           <td><?php echo $datos['correo']; ?></td>
           <td><?php echo $datos['celular']; ?></td>
           <td><?php echo $datos['microred']; ?></td>
           <td><?php echo $datos['cod_est']; ?></td>
           <td><?php echo $datos['nombre_establecimiento']; ?></td>
           <td><?php echo $datos['profesion']; ?></td>
           <td><?php echo $datos['punto_digitacion']; ?></td>


         </tr>
 <?php        } ?>








     </tbody>
 </table>
</body>
</html>
