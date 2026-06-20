<?php

// Array indexado (numérico)
$frutas = ["Manzana", "Banano", "Naranja"];
echo "La segunda fruta es: " . $frutas[1] . "<br>";

// Array asociativo (clave => valor)
$productos = [
    "Laptop" => 1200,
    "Mouse" => 25,
    "Teclado" => 45,
    "Monitor" => 300
];

echo "<h2>Lista de productos</h2>";
echo "<ul>";

$total = 0;

foreach ($productos as $nombre => $precio) {
    echo "<li>$nombre: $$precio</li>";
    $total += $precio;
}

echo "</ul>";

// Cálculo del IVA (19%)
$totalConIva = $total * 1.19;

// Mostrar resultados en negrita
echo "<p><strong>Total sin IVA: $$total</strong></p>";
echo "<p><strong>Total con IVA: $" . number_format($totalConIva, 2) . "</strong></p>";

?>