<?php
$importe_venta = $_POST['importe_venta'];
$hijos_escolar = $_POST['hijos_escolar'];

$sueldo_basico = 600;
$comision = 0.075 * $importe_venta;
$bonificacion = $hijos_escolar * 50;
$sueldo_bruto = $sueldo_basico + $comision + $bonificacion;
$descuento = 0.11 * $sueldo_bruto;
$sueldo_neto = $sueldo_bruto - $descuento;

echo "Sueldo Básico: S/. " . $sueldo_basico . "<br>";
echo "Comisión: S/. " . $comision . "<br>";
echo "Bonificación: S/. " . $bonificacion . "<br>";
echo "Sueldo Bruto: S/. " . $sueldo_bruto . "<br>";
echo "Descuento: S/. " . $descuento . "<br>";
echo "Sueldo Neto: S/. " . $sueldo_neto;
?>