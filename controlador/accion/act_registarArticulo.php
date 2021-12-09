<?php
   
    session_start();
    
    require_once (__DIR__."/../mdb/mdbArticulo.php");

        $nombre = filter_input(INPUT_POST,'nombre');
        $precio = filter_input(INPUT_POST,'precio');
        $descripcion = filter_input(INPUT_POST,'descripcion');
        $imagen = filter_input(INPUT_POST,'imagen');
        $existencia = filter_input(INPUT_POST,'existencia');
        
        $articulo = new Articulo(NULL, $nombre, $precio, $descripcion, $imagen, $existencia);
        $estado  = registrarUsuario($articulo);
        $msg="Se logró registrar el articulo";
       
    $resultado = [
        'estado' => $estado,
        'msg' => $msg
    ];
    
    echo json_encode($resultado);