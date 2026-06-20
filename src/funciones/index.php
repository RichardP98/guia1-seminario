<?php

// Definición de función con parámetro por defecto
function calcularPrecioFinal($precio, $iva = 0.19) {
    return $precio * (1 + $iva);
}

// Array de productos sin IVA
$inventario = [
    "Laptop" => 1200,
    "Mouse" => 25,
    "Teclado" => 45
];

echo "<h2>Precios con IVA incluido</h2>";

foreach ($inventario as $nombre => $precio) {
    $precioFinal = calcularPrecioFinal($precio);

    // Condicional para destacar productos caros
    if ($precioFinal > 100) {
        echo "<p><strong style='color:red;'>$nombre: $$precioFinal (Caro)</strong></p>";
    } else {
        echo "<p>$nombre: $$precioFinal (Económico)</p>";
    }
}

?>

<?php

// Función que determina si una persona es mayor de edad
function esMayorDeEdad($edad) {
    return $edad >= 18;
}

// Array de edades
$edades = [12, 25, 17, 30, 15];

// Recorrer el array y mostrar el resultado
foreach ($edades as $edad) {
    if (esMayorDeEdad($edad)) {
        echo "La persona con edad $edad es MAYOR de edad.<br>";
    } else {
        echo "La persona con edad $edad es MENOR de edad.<br>";
    }
}

?>