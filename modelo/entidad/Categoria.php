<?php
class Categoria
{
    public $idCategoria;
    public $nombre;
    
    public function __construct($idCategoria, $nombre){

        $this->idCategoria = $idCategoria;
        $this->nombre = $nombre;
    }
    
   // Métodos GET
    public function getidCategoria(){
        return $this->idCategoria;
    }

    public function getnombre()
    {
        return $this->nombre;
    }
   
    //Métodos SET

    public function setidCategoria($idCategoria)
    {
        $this->idCategoria = $idCategoria;

        return $this;
    }

    public function setnombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

}