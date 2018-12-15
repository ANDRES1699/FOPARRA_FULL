<?php
    require_once 'librerias\fpdf\WriteHTML.php';
    $pdf=new PDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','',12);
    $html='contenido HTML';

    $pdf->WriteHTML($html);
    $html='contenido HTML';
    $pdf->WriteHTML($html);  
    $pdf->Output();
?>