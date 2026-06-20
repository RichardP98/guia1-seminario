<?php
require_once 'Producto.php';

// Instanciar productos
$prod1 = new Producto("Laptop Gamer", 1500, "Electrónica");
$prod2 = new Producto("Silla de Oficina", 250, "Oficina");

echo "<h2>Catálogo POO</h2>";
echo "<ul>";
echo "<li>" . $prod1->getInfo() . "</li>";
echo "<li>" . $prod2->getInfo() . "</li>";
echo "</ul>";
?>