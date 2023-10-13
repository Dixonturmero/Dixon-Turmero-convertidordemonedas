<?php
class CambiaMoneda {
private $factorCambio;

public function __construct($factorCambio) {
$this->factorCambio = $factorCambio;
}

public function calcularValorDolares($sumaBolivares) {
return $sumaBolivares / $this->factorCambio;
}
}
?>