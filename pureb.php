<?php
require('Admin/fpdf/fpdf.php');



class PDF extends FPDF
{
    function Header()
    {
        // Logo
        $this->Image('img/Productos/Banner.jpg',10,8,33);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Movernos a la derecha
        $this->Cell(80);
        // Título
        $this->Cell(30,10,'Mascotas',1,0,'C');
        // Salto de línea
        $this->Ln(20);
    }
    
    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Número de página
        $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
    }
    }
    
$pdf = new PDF( );
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);



for($i=0;$i<20;$i++){
    $pdf->SetTextColor(36,129,221);
    $pdf->Image('img/Productos/comida.jpg',100,200,-500);
    $pdf->Cell(0,20,'Hola Mundo'.$i);
    $pdf->Image('img/Productos/gato3.jpg',60,200,-500);
$pdf->Ln(20);
}

$pdf->Output();

?>
