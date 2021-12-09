<?php
class Usuario
{
    public $idUsuario;
    public $primerNombre;
    public $segundoNombre;
    public $primerApellido;
    public $segundoApellido;
    public $correo;
    public $password;
    public $esAdmin;
    public $telefono;
    
    public function __construct($idUsuario, $primerNombre, $segundoNombre, $primerApellido,$segundoApellido, $correo, $password, $esAdmin, $telefono){

        $this->idUsuario = $idUsuario;
        $this->primerNombre = $primerNombre;
		$this->segundoNombre = $segundoNombre;
		$this->primerApellido = $primerApellido;
        $this->segundoApellido = $segundoApellido;
        $this->correo = $correo;
        $this->password = $password;
		$this->esAdmin = $esAdmin;
        $this->telefono = $telefono;
    }
    
   // Métodos GET
    public function getidUsuario(){
        return $this->idUsuario;
    }

    public function getprimerNombre()
    {
        return $this->primerNombre;
    }

    public function getsegundoNombre()
    {
        return $this->segundoNombre;
    }
    
     public function getprimerApellido()
    {
        return $this->primerApellido;
    }

	 public function getsegundoApellido()
    {
        return $this->segundoApellido;
    }

    public function getcorreo()
    {
        return $this->correo;
    }

    public function getpassword()
    {
        return $this->password;
    }

    public function getesAdmin()
    {
        return $this->esAdmin;
    }

    public function gettelefono(){
        return $this->telefono;
    }
   
    //Métodos SET

    public function setidUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    public function setprimerNombre($primerNombre)
    {
        $this->primerNombre = $primerNombre;

        return $this;
    }

    public function setsegundoNombre($segundoNombre)
    {
        $this->segundoNombre = $segundoNombre;

        return $this;
    }

    public function setprimerApellido($primerApellido)
    {
        $this->primerApellido = $primerApellido;

        return $this;
    }

    public function setsegundoApellido($segundoApellido)
    {
        $this->segundoApellido = $segundoApellido;

        return $this;
    }

    public function setcorreo($correo)
    {
        $this->getcorreo = $correo;

        return $this;
    }

    public function setpassword($password)
    {
        $this->getpassword = $password;

        return $this;
    }

    public function setesAdmin($esAdmin)
    {
        $this->esAdmin = $esAdmin;

        return $this;
    }

    public function settelefono($telefono)
    {
        $this->gettelefono = $telefono;

        return $this;
    }
}