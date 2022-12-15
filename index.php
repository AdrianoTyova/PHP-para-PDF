<?php
require_once 'dompdf/autoload.inc.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml( str: "<h1>Olá Mundo</h1> <p>Meu primeiro PDF</p>");

ob_start();
require "user.php";
$dompdf -> load_html(ob_get_clean());

// Escolher o tamanho e a orientação
$dompdf->setPaper(size: 'A4', orientation: 'landscape');

// Renderizar HTML para PDF
$dompdf->render();

// Gerar Pdf no Navegador
$dompdf->stream("arquivo.pdf", array("Attachment" => false));
?>