<?php

class Calificacion
{
    public $idusuario;
    public $idarticulo;
    public $calificacion;
    public $apreciacion;

    //gets
    public function __construct($idusuario,$idarticulo,$calificacion,$apreciacion){
        
        $this->idusuario=$idusuario;
        $this->idarticulo=$idarticulo;
        $this->calificacion=$calificacion;
        $this->apreciacion=$apreciacion;


    }

    public function getidusuario(){
        return $this->idusuario;
    }

    public function getidarticulo(){
        return $this->idarticulo;
    }

    public function getcalificacion(){
        return $this->calificacion;
    }

    public function getapreciacion(){
        return $this->apreciacion;
    }

    //sets
    public function setidusuario($id){
        $this->idusuario=$id;
        return $this;
    }
    public function setidarticulo($idarticulo){
        $this->idarticulo=$idarticulo;
        return $this;
    }
    public function setcalificacion($calificacion){
        $this->calificacion=$calificacion;
        return $this;
    }
    public function setapreciacion($apreciacion){
        $this->apreciacion=$apreciacion;
        return $this;
    }


}