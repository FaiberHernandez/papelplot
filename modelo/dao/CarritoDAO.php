<?php

require_once ("DataSource.php");  
require_once (__DIR__."/../entidad/Carrito.php");
class CarritoDao{
    public function registrarCarrito(Carrito $carrito){
        $data_source = new DataSource();
        $stmt1 = "INSERT INTO carritos VALUES (:idUsuario,:idArticulo,:cantidad)"; 
        
        $resultado = $data_source->ejecutarActualizacion($stmt1, array(
            ':idUsuario' => $carrito->getidUsuario(),
            ':idArticulo' => $carrito->getidArticulo(),
            ':cantidad' => $carrito->getcantidad(),
            )
        );
      return $resultado;
    }

    public function registroCarrito(Carrito $carrito){

        $data_source = new DataSource();
        $data_table= $data_source->ejecutarConsulta(
            "SELECT * FROM carritos WHERE idUsuario = :idUsuario AND idArticulo = :idArticulos",
            array(':idUsuario'=>$carrito->getidUsuario(),':idArticulos'=>$carrito->getidArticulo())
        );

        if(count($data_table)==1){
            $data_source = new DataSource();
            $data_table= $data_source->ejecutarActualizacion("UPDATE carritos SET cantidad = :cantidad WHERE idUsuario = :idUsuario AND idArticulo = :idArticulos",
                array(':cantidad'=> $data_table[0]["cantidad"]+1,':idUsuario'=>$carrito->getidUsuario(),':idArticulos'=>$carrito->getidArticulo())
            );
        }else{

            registrarCarrito($carrito);
            
        }


    }
}
