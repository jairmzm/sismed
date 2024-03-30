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
$pdf->Cell(0,8,'Reporte Personal de Farmacia - Red de Salud Abancay',1,1,"C");
$pdf->SetFont('Arial','B',8);
$pdf->Cell(37,8,'Nombre',1);
$pdf->Cell(40,8,'Apellidos',1);
$pdf->Cell(15,8,'DNI',1);
$pdf->Cell(16,8,'Celular',1);
$pdf->Cell(45,8,'Establecimiento',1);
$pdf->Cell(45,8,'Profesion',1);

$query="SELECT id_reg,nombres,apellidos,dni,correo,celular,establecimiento.id_establecimiento as ee,microred,nombre_establecimiento,profesion FROM registrar INNER JOIN establecimiento  WHERE establecimiento.id_establecimiento=registrar.id_establecimiento";
$result = mysqli_query($conexion, $query);
$no=0;
while($row = mysqli_fetch_array($result)){
	//$no=$no+1;
	$pdf->Ln(8);
	$pdf->SetFont('Arial','',8);
	//$pdf->Cell(10,8,$no,1); //contador
	$pdf->Cell(37,8,$row['nombres'],1);
	$pdf->Cell(40,8,$row['apellidos'],1);
	$pdf->Cell(15,8,$row['dni'],1);
	$pdf->Cell(16,8,$row['celular'],1);
  $pdf->Cell(45,8,$row['nombre_establecimiento'],1);
  $pdf->Cell(45,8,$row['profesion'],1);
}
$pdf->Output();
?>
