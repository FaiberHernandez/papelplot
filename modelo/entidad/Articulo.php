<?php

class Articulo
{
    public $idArticulo;
    public $nombre;
    public $precio;
    public $descripcion;
    public $imagen;
    public $existencia;

    public function __construct($idArticulo,$nombre,$precio,$descripcion,$imagen,$existencia){
        
        $this->idArticulo=$idArticulo;
        $this->nombre=$nombre;
        $this->precio=$precio;
        $this->descripcion=$descripcion;
        $this->imagen=$imagen;
        $this->existencia=$existencia;

    }

    public function getIdArticulo(){
        return $this->idArticulo;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getPrecio(){
        return $this->precio;
    }

    public function getDescripcion(){
        return $this->descripcion;
    }

    public function getImagen(){
        return $this->imagen;
    }

    public function getExistencia(){
        return $this->existencia;
    }

    public function setIdArticulo($id){
        $this->idArticulo=$id;
        return $this;
    }
    public function setNombre($nombre){
        $this->nombre=$nombre;
        return $this;
    }
    public function setPrecio($precio){
        $this->precio=$precio;
        return $this;
    }
    public function setDescripcion($descripcion){
        $this->descripcion=$descripcion;
        return $this;
    }
    public function seImagen($imagen){
        $this->imagen=$imagen;
        return $this;
    }
    public function setExistencia($existencia){
        $this->existencia=$existencia;
        return $this;
    }

}