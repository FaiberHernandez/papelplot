<?php
class MetodoPago
{
    public $idMetodoPago;
    public $fecha;
    public $detalles;
    
    public function __construct($idMetodoPago, $fecha, $detalles){

        $this->idMetodoPago = $idMetodoPago;
        $this->fecha = $fecha;
		$this->detalles = $detalles;
    }
    
   // Métodos GET
    public function getidMetodoPago(){
        return $this->idMetodoPago;
    }

    public function getfecha()
    {
        return $this->fecha;
    }

    public function getdetalles()
    {
        return $this->detalles;
    }
   
    //Métodos SET

    public function setidMetodoPago($idMetodoPago)
    {
        $this->idMetodoPago = $idMetodoPago;

        return $this;
    }

    public function setfecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function setdetalles($detalles)
    {
        $this->detalles = $detalles;

        return $this;
    }
}