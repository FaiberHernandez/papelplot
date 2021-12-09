<?php
require_once(__DIR__."/../../modelo/dao/CarritoDAO.php");
        

function registrarCarrito(Carrito $carrito){
    
    $dao=new CarritoDAO();

    $carrito = $dao->registroCarrito($carrito);

    return $carrito;
}
