

<?php
require __DIR__ . '/vendor/autoload.php';

use App\DNI;

$dni = new DNI();
$prueba = '12345678Z';

echo "El DNI $prueba es " . ($dni->validar($prueba) ? "válido" : "inválido") . ".";
