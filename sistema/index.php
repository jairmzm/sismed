<?php
require 'head.php';
require '../conexion.php';
$sql="SELECT COUNT(*) AS cantidad FROM registrar";
$resultado=mysqli_query($conexion,$sql);
$fila=mysqli_fetch_array($resultado);
$total=$fila['cantidad'];


$sql_establecimientos="SELECT COUNT(*) AS cantidad FROM establecimiento";
$result=mysqli_query($conexion,$sql_establecimientos);
$row=mysqli_fetch_array($result);
$tot=$row['cantidad'];


$puntos="SELECT COUNT(*) AS total_puntos FROM establecimiento WHERE punto_digitacion='SI'";
$r=mysqli_query($conexion,$puntos);
$row1=mysqli_fetch_array($r);
$total_puntos=$row1['total_puntos'];

$mensage="SELECT *FROM message";
$coonsulta_message=mysqli_query($conexion,$mensage);
?>


<div class="alert alert-success" role="alert">
  <?php
while($dat=mysqli_fetch_array($coonsulta_message)){
  echo $dat['mensaje']." ".$dat['date_timess'];
}

   ?>

</div>
<div class="">
  <h5>
<button type="button" name="button" class="btn btn-link"><a href="https://lookerstudio.google.com/reporting/70f959f7-22bd-43ce-b11c-0e69a2a74b91/page/S6SSD?s=g_ab8xfSbh8">Dashboard Gestion de Abastecimiento Almacen Especializado - Red de - Salud Abancay 2023</a> </button>
<br>
<button type="button" name="button" class="btn btn-link"><a href="https://app.powerbi.com/view?r=eyJrIjoiYmY3N2M0MmEtYWYzYS00MmQ0LTkzOGUtZDNhOWYzNGFjZTgyIiwidCI6IjE2ZjJkOTQ5LTc2Y2EtNDdhNS1iNmZhLWNmOTdiMzk3Y2VhYSJ9">Mundo IPRESS</a> </button>
<br>
</h5>
</div>
<div class="container-fluid px-4">
  <div class="row">
              <div class="col-sm-6 col-lg-3">
                <div class="card mb-4 text-white bg-primary">
                  <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                    <div>
                      <div class="fs-4 fw-semibold"><h1><?php echo "Cantidad: ". $total;  ?></h1> <span class="fs-6 fw-normal">
                          <svg class="icon">

                          </svg></span>
  						</div>
                      <div>Usuario Registrados</div>
                    </div>
                    <div class="dropdown">
                      <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg class="icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                        </svg>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                    </div>
                  </div>
                  <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                    <canvas class="chart" id="card-chart1" height="70"></canvas>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card mb-4 text-white bg-info">
                  <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                    <div>
                      <div class="fs-4 fw-semibold"><h1><?php echo "Cantidad: ". $tot; ?> </h1><span class="fs-6 fw-normal">
                          <svg class="icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-arrow-top"></use>
                          </svg></span></div>
                      <div>Establecimientos de Salud</div>
                    </div>
                    <div class="dropdown">
                      <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg class="icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                        </svg>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                    </div>
                  </div>
                  <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                    <canvas class="chart" id="card-chart2" height="70"></canvas>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card mb-4 text-white bg-warning">
                  <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                    <div>
                      <div class="fs-4 fw-semibold"><h1><?php echo "CANTIDAD: ".$total_puntos; ?></h1> <span class="fs-6 fw-normal">
                          <svg class="icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-arrow-top"></use>
                          </svg></span></div>
                      <div>Puntos de Digitacion</div>
                    </div>
                    <div class="dropdown">
                      <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg class="icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                        </svg>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                    </div>
                  </div>
                  <div class="c-chart-wrapper mt-3" style="height:70px;">
                    <canvas class="chart" id="card-chart3" height="70"></canvas>
                  </div>
                </div>
              </div>
              <!-- /.col-->

              <!-- /.col-->
            </div>


                    </div>
                    <div class="">


          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <ul>
              <li>
                <i class="bx bx-store-alt"></i>
                <div>
                  <h5>Misión</h5>
                  <p>Contribuir al acceso oportuno de productos farmacéuticos, dispositivos médicos y productos sanitarios para la población de la provincia de Abancay, asegurando su disponibilidad con calidad en los 88 establecimientos públicos y los 02 Centros de Salud Mental que se encuentran en la jurisdicción de la Red de Salud Abancay.</p>
                </div>
              </li>
              <li>
                <i class="bx bx-images"></i>
                <div>
                  <h5>Visión</h5>
                  <p>Ser una unidad modelo en la Región Apurímac que brinde un servicio eficiente y eficaz a todos los establecimientos de salud de la jurisdicción de la Red de Salud Abancay, y de estar forma garantizar la disponibilidad al 100% de todos los productos farmacéuticos, dispositivos médicos y productos sanitarios.</p>
                </div>
              </li>
            </ul>
                    </div>

<?php
require 'footer.php';
 ?>
