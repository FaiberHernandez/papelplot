<?php
    
    session_start();
    
    require_once (__DIR__.'/../mdb/mdbArticulo.php');
    $idArticulo = $_GET['idArticulo'];
    
    eliminarArticulo($idArticulo);

    //falta a donde lo va redericionar 
    //ejem: header("Location: ../../vista/administradorUsuarios.php");