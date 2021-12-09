<?php
    session_start();
    
    $idArticulo = $_POST['idArt'];
    echo json_encode($_SESSION['ID_USUARIO']);


