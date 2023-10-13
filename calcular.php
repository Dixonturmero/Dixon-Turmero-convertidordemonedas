<?php
require_once 'CambiaMoneda.php';

$factorCambio = 37.00;
$transformador = new CambiaMoneda($factorCambio);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$sumaBolivares = $_POST["suma"];
$valorDolares = $transformador->calcularValorDolares($sumaBolivares);

echo "La suma en dólares es: " . number_format($valorDolares, 2);
}
?>