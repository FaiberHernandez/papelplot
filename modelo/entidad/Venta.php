<?php
class Venta
{
    public $idVenta;
    public $fecha;
    public $idUsuario;
    public $idMetodoPago;
    
    public function __construct($idVenta, $fecha, $idUsuario, $idMetodoPago){

        $this->idVenta = $idVenta;
        $this->fecha = $fecha;
		$this->idUsuario = $idUsuario;
		$this->idMetodoPago = $idMetodoPago;
    }
    
   // Métodos GET
    public function getidVenta(){
        return $this->idVenta;
    }

    public function getfecha()
    {
        return $this->fecha;
    }

    public function getidUsuario()
    {
        return $this->idUsuario;
    }
    
     public function getidMetodoPago()
    {
        return $this->idMetodoPago;
    }
   
    //Métodos SET

    public function setidVenta($idVenta)
    {
        $this->idVenta = $idVenta;

        return $this;
    }

    public function setfecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function setidUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    public function setidMetodoPago($idMetodoPago)
    {
        $this->idMetodoPago = $idMetodoPago;

        return $this;
    }
}