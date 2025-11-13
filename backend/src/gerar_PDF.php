<?php
include '../config/config.php';
require_once '../../vendor/autoload.php';
use dompdf\Dompdf;
use dompdf\Options;
$dompdf = new Dompdf();
$id = $_POST['id'] ?? null;
$options = new Options();
$options -> set('isHTML5ParserEnabled', true);
$options -> set('isRemoteEnabled', true);   
$dompdf = new Dompdf($options);
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream("estoque.pdf", ["Attachment" => false]);
?>