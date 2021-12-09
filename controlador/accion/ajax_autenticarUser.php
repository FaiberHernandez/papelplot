<?php
    //Con session_start() se puede iniciar una nueva sesión 
    //o reanudar la sesión existente
    session_start();

    //Con require_once se incluye el archivo mdbUsuario.php
    require_once (__DIR__."/../mdb/mdbUsuario.php");
        
        //Se obtiene el correo y password del formulario del login,
        //los datos son recibidos por el método POST
        $correo = $_POST['correo'];
        $password = $_POST['password'];

        //Se llama a la funcion autenticarUsuario() que esta en mdbUsuario.php
        $user = autenticarUsuario($correo, $password);

        $estado = false;
        $msg = "nada";
        
        if($user == null){
            $estado = false;
            $msg="Usuario no existe";

        }else{
            $estado = true;
            $msg="Usuario si existe";
        }

        $resultado = [
            'estado' => $estado,
            'msg' => $msg
        ];

        echo json_encode($resultado);