<?php
require_once './Reportes/fpdf.php';
require_once './Model/ClienteModel.php';

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(0, 10, 'Reporte de Clientes', 0, 1, 'C');
$pdf->Ln(5);

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(20, 10, 'ID', 1);
$pdf->Cell(40, 10, 'Nombre', 1);
$pdf->Cell(25, 10, 'DNI', 1);
$pdf->Cell(40, 10, 'Correo', 1);
$pdf->Cell(30, 10, 'Telefono', 1);
$pdf->Cell(35, 10, 'Registro', 1);
$pdf->Ln();

$model = new ClienteModel();
$clientes = $model->cargar();

$pdf->SetFont('Arial', '', 9);

foreach ($clientes as $c) {
    $pdf->Cell(20, 8, $c->getIdcliente(), 1);
    $pdf->Cell(40, 8, $c->getNombre(), 1);
    $pdf->Cell(25, 8, $c->getDni(), 1);
    $pdf->Cell(40, 8, $c->getCorreo(), 1);
    $pdf->Cell(30, 8, $c->getTelefono(), 1);
    $pdf->Cell(35, 8, $c->getFechaRegistro(), 1);
    $pdf->Ln();
}

$pdf->Output();
?>
