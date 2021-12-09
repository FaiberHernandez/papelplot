<?php

class ContedidoCompra
{
    public $idventa;
    public $idarticulo;
    public $cantidad;

    public function __construct($idventa,$idarticulo,$cantidad){
        
        $this->idventa=$idventa;
        $this->idarticulo=$idarticulo;
        $this->cantidad=$cantidad;
        

    }

    public function getidventa(){
        return $this->idventa;
    }

    public function getidarticulo(){
        return $this->idarticulo;
    }

    public function getcantidad(){
        return $this->cantidad;
    }


    public function setidventa($id){
        $this->idventa=$id;
        return $this;
    }
    public function setidarticulo($idarticulo){
        $this->idarticulo=$idarticulo;
        return $this;
    }
    public function setcantidad($cantidad){
        $this->cantidad=$cantidad;
        return $this;
    }


}