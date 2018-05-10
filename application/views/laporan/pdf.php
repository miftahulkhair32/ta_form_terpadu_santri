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
$pdf->Cell(260,0,'Pesantren Teknologi Informasi dan Komunikasi',0,false,'C',0,'',0,false,'M','M');
$pdf->SetFont('helvetica', '', 10);
$pdf->Text(130,20,'Jl.Mandor Basar');
$pdf->SetLineStyle(['width'=>0.5,'cap'=>'butt','join'=>'miter','dash' => 0, 'color' => [0, 0, 0]]);
$pdf->Line(20,40,275,40);

$pdf->SetFont('dejavusans', '', 15);
$pdf->Text(118,45,'Laporan Form Santri');
$pdf->Ln();

$pdf->SetFillColor(224,234,255);
$pdf->SetTextColor(0);
$pdf->SetFont('','',9);
$pdf->Cell(8,10,'NO',1,0,'C',1);
$pdf->Cell(40,10,'Nama',1,0,'C',1);

$pdf->SetFillColor(224,254,255);
$pdf->Cell(60,3,'Karakter',1,1,'C',1);
$pdf->SetFillColor(0,255,0);
$pdf->MultiCell(19,5,'Partisipasi Program',1,'C',1,1,63,56,true);
$pdf->MultiCell(14,5,'Jumlah Nilai',1,'C',1,1,81,56,true);

ob_clean();
$pdf->Output('Laporan.pdf','I');

?>