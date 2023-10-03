<?php
$precio_actual = $_POST['precio_actual'];
$cantidad_gaseosas = $_POST['cantidad_gaseosas'];

$nuevo_precio = $precio_actual * 0.95; // Reducción del 5%
$importe_compra = $cantidad_gaseosas * $nuevo_precio;
$descuento = 0.07 * $importe_compra;
$importe_pagar = $importe_compra - $descuento;
$obsequio = $cantidad_gaseosas * 2;

echo "Nuevo Precio de la Gaseosa: S/. " . $nuevo_precio . "<br>";
echo "Importe de la Compra: S/. " . $importe_compra . "<br>";
echo "Descuento: S/. " . $descuento . "<br>";
echo "Importe a Pagar: S/. " . $importe_pagar . "<br>";
echo "Obsequio (Caramelos): " . $obsequio . " caramelos";
?>
