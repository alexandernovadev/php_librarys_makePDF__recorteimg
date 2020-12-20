<?php 

require_once '../vendor/autoload.php';

$fotooriginal = 'ima.jpg';
$guardaren = 'fotomodificada.jpg';

// Creo instancia del Objeto para Modificar imgages
// se puede redimensionar cortar filtro etc ver DOC

$thumb = new PHPThumb\GD(__DIR__ .'./marvel.jpg');
$thumb->resize(60);
$thumb->show();
$thumb->save('sirv.jpg');
// NO muestra ni mierda esta joda