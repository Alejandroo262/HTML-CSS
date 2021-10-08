<?php

class User implements IToJson
{
    private $nombre;
    private $apellido;
    private $telefono;
    private $email;
    private $contrasena;
    private $sexo;


    /**
     * User constructor.
     * @param $nombre
     * @param $apellido
     * @param $telefono
     * @param $email
     * @param $contrasena
     * @param $sexo
     */
    public function __construct($nombre, $apellido, $telefono, $email, $contrasena, $sexo)
    {
        $this->setNombre($nombre);
        $this->setApellido($apellido);
        $this->setTelefono($telefono);
        $this->setEmail($email);
        $this->setContrasena($contrasena);
        $this->setSexo($sexo);
    }

    /**
     * @return mixed
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @param mixed $sexo
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * @param mixed $apellido
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    /**
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * @param mixed $telefono
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getContrasena()
    {
        return $this->contrasena;
    }

    /**
     * @param mixed $contrasena
     */
    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;
    }


    public function toJson()
    {
        return json_encode([
            $this->getNombre(),
            $this->getApellido(),
            $this->getTelefono(),
            $this->getContrasena(),
            $this->getEmail(),
            $this->getSexo()
        ]);
    }
}