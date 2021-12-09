<?php

class Carrito
{
    public $idUsuario;
    public $idArticulo;
    public $cantidad;

    public function __construct($idUsuario,$idArticulo,$cantidad){
        
        $this->idUsuario=$idUsuario;
        $this->idArticulo=$idArticulo;
        $this->cantidad=$cantidad;
        

    }

    public function getidUsuario(){
        return $this->idUsuario;
    }

    public function getidArticulo(){
        return $this->idArticulo;
    }

    public function getcantidad(){
        return $this->cantidad;
    }


    public function setidUsuario($id){
        $this->idUsuario=$id;
        return $this;
    }
    public function setidArticulo($idArticulo){
        $this->idArticulo=$idArticulo;
        return $this;
    }
    public function setcantidad($cantidad){
        $this->cantidad=$cantidad;
        return $this;
    }


}