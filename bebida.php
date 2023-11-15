<?php 
class Bebida extends Articulo {
    private $alcoholica;

    public function __construct($nombre, $coste, $precio, $contador, $alcoholica) {
        parent::__construct($nombre, $coste, $precio, $contador);
        $this->alcoholica = $alcoholica;
    }

    public function alcoholica() {
        return $this->alcoholica;
    }
}
?>
