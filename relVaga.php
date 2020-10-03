<?php
define('FPDF_FONTPATH', 'font/');
require_once "includes/fpdf/fpdf.php";
require 'vendor/autoload.php';
header('Content-Type: text/html; charset=utf-8');


use \App\Db\Database;
use \App\Entity\Vaga;

define('TITLE', 'Relatório da Vaga');

if (isset($_GET['id'])) {
    $vagax=new Vaga();
    $vaga = $vagax->getVaga($_GET['id']);
    //$obVaga=Vaga::getVaga($_GET['id']);
}
$pdf = new FPDF();
$arquivo = "relatorio-individual.pdf";
$pdf->AddPage();
$pdf->SetFont('Arial','B',18);
$pdf->Image('./includes/img/logo.jpg',10,15,-180);
$pdf->Ln(5);
$pdf->Cell(190,10,utf8_decode('Relatório Individual'),0,0,"C");
$pdf->Image('./includes/img/logo.jpg',10,15,-180);
$pdf->Ln(18);

$pdf->SetFont("Arial", "I", 10);
$pdf->Cell(10, 7, utf8_decode("ID"), 1, 0, "C");
$pdf->Cell(50, 7, utf8_decode("Titulo"), 1, 0, "C");
$pdf->Cell(100, 7, utf8_decode("Descricao"), 1, 0, "C");
$pdf->Cell(30, 7, utf8_decode("Ativo"), 1, 0, "C");
$pdf->Ln();



$pdf->Cell(10, 7, utf8_decode($vaga->id), 1, 0, "C");
$pdf->Cell(50, 7, utf8_decode($vaga->titulo), 1, 0, "C");
$pdf->Cell(100, 7, utf8_decode($vaga->descricao), 1, 0, "C");
$pdf->Cell(30, 7, utf8_decode($vaga->ativo), 1, 0, "C");
$pdf->Ln();


$tipo_pdf = "I";


$pdf->Output($arquivo, $tipo_pdf);
