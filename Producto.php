<?php
class Producto{

    private $nombre;
    private $imagen;
    private $precio;
    private $cantidad;

    public function __construct($nombre,$imagen,$precio){
        $this->nombre = $nombre;
        $this->imagen = $imagen;
        $this->precio = $precio;
    }

    public function __set($atr,$val){
        if(property_exists($this,$atr)){
            $this->$atr = $val;
        }
    }

    public function __get($atr){
        return $this->$atr;
    }
}

$producto1 = new Producto("AirPods","./img/air.png",190);
$producto2 = new Producto("iPod","./img/tlfn.png",320);
$producto3 = new Producto("Auriculares Sony","./img/auriculares.png",120);

?>