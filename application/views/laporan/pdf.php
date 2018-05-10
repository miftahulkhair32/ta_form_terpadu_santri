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
$pdf->Cell(7,17.5,'NO',1,0,'C',1);
$pdf->Cell(40,17.5,'Nama',1,0,'C',1);

$pdf->SetFillColor(224,254,255);
$pdf->Cell(107,2,'Karakter',1,1,'C',1);
$pdf->SetFillColor(124,244,119);
$pdf->MultiCell(19,13,'Partisipasi Program',1,'C',1,1,62,56,true);
$pdf->MultiCell(14,13,'Jumlah Nilai',1,'C',1,1,81,56,true);
$pdf->SetFillColor(232,170,109);
$pdf->MultiCell(21,13,'Target Pencapaian Diri',1,'C',1,1,95,56,true);
$pdf->MultiCell(14,13,'Jumlah Nilai',1,'C',1,1,116,56,true);
$pdf->SetFillColor(119,244,219);
$pdf->MultiCell(18,13,'Nilai Observasi',1,'C',1,1,130,56,true);
$pdf->SetFillColor(232,237,83);
$pdf->MultiCell(10,13,'Total Nilai',1,'C',1,1,148,56,true);
$pdf->MultiCell(11,13,'Huruf',1,'C',1,1,158,56,true);
$pdf->SetFillColor(70,242,31);
$pdf->MultiCell(17,13,'Halaman',1,'C',1,1,169,56,true);
$pdf->SetFillColor(83,162,237);
$pdf->MultiCell(51,2,'Tahfizh',1,'C',1,1,169,51.5,true);
$pdf->MultiCell(14,13,'Jumlah Nilai',1,'C',1,1,185,56,true);
$pdf->MultiCell(10,13,'Total Nilai',1,'C',1,1,199,56,true);
$pdf->MultiCell(11,13,'Huruf',1,'C',1,1,209,56,true);
$pdf->SetFillColor(239,79,79);
$pdf->MultiCell(31,17.5,'Point Pelanggaran',1,'C',1,1,220,51.5,true);
$pdf->Ln();

$w = [40, 45, 50 ,55 , 60, 65 , 70];


ob_clean();
$pdf->Output('Laporan.pdf','I');

?>