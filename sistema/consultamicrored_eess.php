<?php
require '../conexion.php';

$anio=$_POST['anio'];
$mes=$_POST['mes'];
$microred=$_POST['microred'];
$sql="SELECT *FROM disponiblidad_microred_eess WHERE anio='$anio' AND mes='$mes' and microred='$microred' ORDER BY disponibilidad ";
$query=$conexion->query($sql);
$data=array();
while ($r=$query->fetch_object()) {
  $data[]=$r;
}
 ?>

<?php require 'head.php'; ?>
<br>
 <div class="row">
     <div class="col-lg-6">
         <div class="card mb-4">
             <div class="card-header">
                 <i class="fas fa-chart-bar me-1"></i>
                 PORCEMTAJE DE DESABASTECIMIENTO
             </div>
             <div class="card-body"><canvas id="myBarChart" width="100%" height="50"></canvas></div>
             <div class="card-footer small text-muted">RANKING POR DESABASTECIMIENTO - RED DE SALUD ABANCAY</div>
         </div>
     </div>

 </div>

 <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script type="text/javascript">
        // Set new default font family and font color to mimic Bootstrap's default styling
        Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = '#292b2c';

        // Bar Chart Example
        var ctx = document.getElementById("myBarChart");
        var myLineChart = new Chart(ctx, {
          type: 'bar',
          data: {
            labels: [

              <?php foreach($data as $d):?>
          "<?php echo $d->establecimiento?>",
          <?php endforeach; ?>


            ],
            datasets: [{
              <?php
              $saber_sit=$_POST['saber'];
               ?>
              label: "<?php echo $saber_sit; ?>",
              backgroundColor: "rgba(2,117,216,1)",
              borderColor: "rgba(2,117,216,1)",
              data: [
                <?php foreach($data as $d):?>
            <?php $saber=$_POST['saber']; ?>
    <?php echo $d->$saber;?>,
    <?php endforeach; ?>


              ],
            }],
          },
          options: {
            scales: {
              xAxes: [{
                time: {
                  unit: 'month'
                },
                gridLines: {
                  display: false
                },
                ticks: {
                  maxTicksLimit: 30
                }
              }],
              yAxes: [{
                ticks: {
                  min: 0,
                  max: 120,
                  maxTicksLimit: 30
                },
                gridLines: {
                  display: true
                }
              }],
            },
            legend: {
              display: true
            }
          }
        });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
 <script src="assets/demo/chart-pie-demo.js"></script>





    </body>
 </html>
