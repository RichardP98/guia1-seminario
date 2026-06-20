<?php
class Producto {
    // Atributos privados
    private $nombre;
    private $precio;
    private $iva;
    private $categoria;

    // Constructor
    public function __construct($nombre, $precio, $categoria, $iva = 0.19) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->categoria = $categoria;
        $this->iva = $iva;
    }

    // Métodos públicos
    public function getPrecioFinal() {
        return $this->precio * (1 + $this->iva);
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    // Mostrar información completa
    public function getInfo() {
        return "Producto: {$this->nombre} | Categoría: {$this->categoria} | Precio Final: $" . $this->getPrecioFinal();
    }
}
?>