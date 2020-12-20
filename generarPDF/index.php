<?php
require '../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;



$html2pdf = new Html2Pdf();
// Instancia la clase para hacer PDF

// Va a generar un PDF en base a HTML y CSS
// que lo ye lo ponga

// $html = "<h1>Hola Marte </h1> Esto es un PDF con HTML";
// $html .= "<br> Interesante este Curso";
// $html .= "<br> Cosas que necesitaba cuando cree la app 1";
// $html .= "<br> Que por cierto, quedo chambona";

// $html2pdf->writeHTML($html);// Panga esto
// $html2pdf->output('Aquinamedelcarchivo.pdf');// Cree PDF con el name (aqui Name)

// Very easy


// Ahora con archivo completo 


// Recoger la vista a imprimir
ob_start(); // Comienza a leer que quiere imprimir al pdf
require_once 'pdfparagenerar.php';// le digo que ponga este archivo
$html = ob_get_clean(); // Termina de LEER

$html2pdf->writeHTML($html);// Panga esto
$html2pdf->output('Aquinamedelcarchivo.pdf');// Cree PDF con el name (aqui Name)
