<?php

class Comentario
{
    public $idcomentario;
    public $idusuario;
    public $idarticulo;
    public $comentario;
    

    public function __construct($idcomentario,$idusuario,$idarticulo,$comentario){
        
        $this->idcomentario=$idcomentario;
        $this->idusuario=$idusuario;
        $this->idarticulo=$idarticulo;
        $this->comentario=$comentario;
        

    }

    public function getidcomentario(){
        return $this->idcomentario;
    }

    public function getidusuario(){
        return $this->idusuario;
    }

    public function getidarticulo(){
        return $this->idarticulo;
    }

    public function getcomentario(){
        return $this->comentario;
    }


    public function setidcomentario($id){
        $this->idcomentario=$id;
        return $this;
    }
    public function setidusuario($idusuario){
        $this->idusuario=$idusuario;
        return $this;
    }
    public function setidarticulo($idarticulo){
        $this->idarticulo=$idarticulo;
        return $this;
    }
    public function setcomentario($comentario){
        $this->comentario=$comentario;
        return $this;
    }


}