<?php
require('pdf/fpdf.php');

class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        // Logo
        $this->Cell(-200);
        $this->Image('IMG/hds.jpg', 0, -10, 220);

        // Arial bold 15
        $this->Ln(10);
        $this->SetFont('Arial', 'B', 18);
        // Movernos a la derecha
        $this->Cell(-200);
        // Título
        //$this->Cell(70,10,'Reporte de productos',0,0,'C');*//
        // Salto de línea
        //$this->Ln(20);
    }

    // Pie de página
    function Footer()
    {
        $this->SetFillColor(20.05, 19);
        $this->Rect(0, 270, 220, 30, 'F');
        $this->SetY(-20); //sube las letras
        $this->SetFont('Arial', '', 10);
        $this->SetTextColor(255, 255, 255);
        $this->SetX(80);
        $this->Write(5, '------------ IESTPA ------------');
        $this->Ln();
        $this->SetX(70);
        $this->Write(5, '                 Programa: APSTI');
        $this->Ln();
        $this->SetX(80);
        $this->Write(5, 'Contacto:(051)-933429092');
    }
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);

$pdf->SetY(70);
$pdf->SetX(35);
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFillColor(79, 59, 120);
$pdf->Cell(21, 9, 'Marca', 0, 0, 'C', 1);
$pdf->Cell(21, 9, 'Modelo', 0, 0, 'C', 1);
$pdf->Cell(21, 9, 'Motor', 0, 0, 'C', 1);
$pdf->Cell(21, 9, 'Chasis', 0, 0, 'C', 1);
$pdf->Cell(21, 9, 'Color', 0, 0, 'C', 1);
$pdf->Cell(21, 9, 'Peso', 0, 0, 'C', 1);
$pdf->Cell(21, 9, 'Precio', 0, 1, 'C', 1);

include('db.php');
require('db.php');
$consulta = "SELECT * FROM automovil";
$resultado = mysqli_query($conexion, $consulta);

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(240, 245, 255);

while ($row = $resultado->fetch_assoc()) {
    $pdf->SetX(35);
    $pdf->Cell(21, 9, $row['Marca'], 0, 0, 'C', 1);
    $pdf->Cell(21, 9, $row['Modelo'], 0, 0, 'C', 1);
    $pdf->Cell(21, 9, $row['Motor'], 0, 0, 'C', 1);
    $pdf->Cell(21, 9, $row['Chasis'], 0, 0, 'C', 1);
    $pdf->Cell(21, 9, $row['Color'], 0, 0, 'C', 1);
    $pdf->Cell(21, 9, $row['Peso'], 0, 0, 'C', 1);
    $pdf->Cell(21, 9, $row['Precio'], 0, 1, 'C', 1);
}

$pdf->Output();
?>
