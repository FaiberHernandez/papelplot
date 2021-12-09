<?php
class CategoriaArticulo
{
    public $idCategoria;
    public $idArticulo;
    
    public function __construct($idCategoria, $idArticulo){

        $this->idCategoria = $idCategoria;
        $this->idArticulo = $idArticulo;
    }
    
   // Métodos GET
    public function getidCategoria(){
        return $this->idCategoria;
    }

    public function getidArticulo()
    {
        return $this->idArticulo;
    }
   
    //Métodos SET

    public function setidCategoria($idCategoria)
    {
        $this->idCategoria = $idCategoria;

        return $this;
    }

    public function setidArticulo($idArticulo)
    {
        $this->idArticulo = $idArticulo;

        return $this;
    }

}