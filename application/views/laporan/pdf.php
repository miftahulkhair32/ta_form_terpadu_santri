<?php
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor(PDF_AUTHOR);
$pdf->SetTitle('Laporan Form');
$pdf->SetSubject('Laporan');
$pdf->SetKeywords('Laporan, From, Santri, Menejemen, Pengasuhan');

$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);

$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$pdf->SetFont('times', 'BI', 12);
$pdf->AddPage();

$pdf->Image('gambar/petik.png',7,5,30);
$pdf->Image('gambar/logo-ybm.png',245,9,50);

$pdf->SetFont('helvetica','B',20);
$pdf->Cell(0,5,'Pesantren Teknologi Informasi dan Komunikasi',0,false,'C',0,'',0,false,'M','M');

$pdf->Output('Laporan.pdf','I');

?>