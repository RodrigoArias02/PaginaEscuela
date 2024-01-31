<?php
include("../../db.php");
include_once "../dompdf/autoload.inc.php";
use Dompdf\Dompdf;
$dompdf = new Dompdf();
ob_start();
include "boletines/pdf.php";
$html = ob_get_clean();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4','landscape');
$dompdf->render();
header("Content-type: application/pdf");
    header("Content-Disposition: inline; filename=nombre_alumno.pdf");
    header("Pragma: no-cache"); 
    header("Expires: 0");
    echo $dompdf->output();
?>