<?php
require('fpdf/fpdf.php');
require '../conexion.php';

$pdf = new FPDF();
///var_dump(get_class_methods($pdf));

// para ponerl el pdf de forma horizontal
//$pdf->set_paper("letter","landscape");


$pdf->AddPage();
$pdf->SetFont('Arial','',8);
$pdf->Cell(50,10,'Date:'.date('d-m-Y').'',0,"R");
$pdf->Ln(15);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(0,8,'Reporte de Establecimientos - Red de Salud Abancay',1,1,"C");
$pdf->SetFont('Arial','B',8);
$pdf->Cell(37,8,'MICRORED',1);
$pdf->Cell(40,8,'CODIGO',1);
$pdf->Cell(52,8,'NOMBRE',1);
$pdf->Cell(16,8,'CAT',1);
$pdf->Cell(45,8,'PUNTO DE DIGITACION',1);


$query="SELECT * FROM establecimiento ORDER BY microred";
$result = mysqli_query($conexion, $query);
$no=0;
while($row = mysqli_fetch_array($result)){
	//$no=$no+1;
	$pdf->Ln(8);
	$pdf->SetFont('Arial','',8);
	//$pdf->Cell(10,8,$no,1); //contador
	$pdf->Cell(37,8,$row['microred'],1);
	$pdf->Cell(40,8,$row['cod_est'],1);
	$pdf->Cell(52,8,$row['nombre_establecimiento'],1);
	$pdf->Cell(16,8,$row['cat_establecimiento'],1);
  $pdf->Cell(45,8,$row['punto_digitacion'],1);

}
$pdf->Output();
?>
