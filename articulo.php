<?php

class Articulo {
    protected $nombre;
    protected $coste;
    protected $precio;
    protected $contador;

    public function __construct($nombre, $coste, $precio, $contador) {
        $this->nombre = $nombre;
        $this->coste = $coste;
        $this->precio = $precio;
        $this->contador = $contador;
    }
    //Getters y setters
    public function getNombre() {
        return $this->nombre;
    }

    public function getCoste() {
        return $this->coste;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getContador() {
        return $this->contador;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    public function setCoste($coste) {
        $this->coste = $coste;
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }
    public function setContador($contador) {
        $this->contador = $contador;
    }

    //Hago una función para llamarla directamente, así sabemos el benficio
    public function calcularBeneficio() {
        return ($this->precio - $this->coste) * $this->contador;
    }
}

?>
