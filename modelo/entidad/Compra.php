<?php

class Articulo
{
    public $idCompra;
    public $idArticulo;
    public $fechas;
    public $cantidad;
    public $detalles;
    

    public function __construct($idCompra,$idArticulo,$fechas,$cantidad,$detalles){
        
        $this->idCompra=$idCompra;
        $this->idArticulo=$idArticulo;
        $this->fechas=$fechas;
        $this->cantidad=$cantidad;
        $this->detalles=$detalles;
       

    }

    public function getidCompra(){
        return $this->idCompra;
    }

    public function getidArticulo(){
        return $this->idArticulo;
    }

    public function getfechas(){
        return $this->fechas;
    }

    public function getcantidad(){
        return $this->cantidad;
    }

    public function getdetalles(){
        return $this->detalles;
    }


    public function setidCompra($id){
        $this->idCompra=$id;
        return $this;
    }
    public function setidArticulo($idArticulo){
        $this->idArticulo=$idArticulo;
        return $this;
    }
    public function setfechas($fechas){
        $this->fechas=$fechas;
        return $this;
    }
    public function setcantidad($cantidad){
        $this->cantidad=$cantidad;
        return $this;
    }
    public function sedetalles($detalles){
        $this->detalles=$detalles;
        return $this;
    }
   

}