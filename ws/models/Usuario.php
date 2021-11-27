<?php

namespace Model;

class Usuario implements IToJson
{
   private $nombre;
   private $apellido;
   private $contrasena;
   private $telefono;
   private $email;
   private $sexo;
   private $nacimiento;

   function __construct($nombre=null, $apellido=null, $contrasena=null, $telefono=null, $email=null, $sexo=null, $nacimiento=null)
   {
       $this->setNombre($nombre);
       $this->setApellido($apellido);
       $this->setContrasena($contrasena);
       $this->setTelefono($telefono);
       $this->setEmail($email);
       $this->setSexo($sexo);
       $this->setNacimiento($nacimiento);
   }

   /**
    * Get the value of nombre
    */ 
   public function getNombre()
   {
      return $this->nombre;
   }

   /**
    * Set the value of nombre
    *
    * @return  self
    */ 
   public function setNombre($nombre)
   {
      $this->nombre = $nombre;

      return $this;
   }

   /**
    * Get the value of apellido
    */ 
   public function getApellido()
   {
      return $this->apellido;
   }

   /**
    * Set the value of apellido
    *
    * @return  self
    */ 
   public function setApellido($apellido)
   {
      $this->apellido = $apellido;

      return $this;
   }

   /**
    * Get the value of contrasena
    */ 
   public function getContrasena()
   {
      return $this->contrasena;
   }

   /**
    * Set the value of contrasena
    *
    * @return  self
    */ 
   public function setContrasena($contrasena)
   {
      $this->contrasena = $contrasena;

      return $this;
   }

   /**
    * Get the value of telefono
    */ 
   public function getTelefono()
   {
      return $this->telefono;
   }

   /**
    * Set the value of telefono
    *
    * @return  self
    */ 
   public function setTelefono($telefono)
   {
      $this->telefono = $telefono;

      return $this;
   }

   /**
    * Get the value of email
    */ 
   public function getEmail()
   {
      return $this->email;
   }

   /**
    * Set the value of email
    *
    * @return  self
    */ 
   public function setEmail($email)
   {
      $this->email = $email;

      return $this;
   }

   /**
    * Get the value of sexo
    */ 
   public function getSexo()
   {
      return $this->sexo;
   }

   /**
    * Set the value of sexo
    *
    * @return  self
    */ 
   public function setSexo($sexo)
   {
      $this->sexo = $sexo;

      return $this;
   }

    /**
     * @return mixed
     */
    public function getNacimiento()
    {
        return $this->nacimiento;
    }

    /**
     * @param mixed $nacimiento
     */
    public function setNacimiento($nacimiento)
    {
        $this->nacimiento = $nacimiento;
    }

   public function toString()
   {
      return "Nombre: ".$this->getNombre().", Apellido: ".$this->getApellido().", Telefono: ".$this->getTelefono()
      .", Email: ".$this->getEmail().", Sexo: ".$this->getSexo().", Nacimiento: ".$this->getNacimiento();
   }

   public function toJson()
   {
      return json_encode([
         "nombre" => $this->getNombre(),
         'apellido'=>$this->getApellido(),
         'telefono'=>$this->getTelefono(),
         'email'=>$this->getEmail(),
         'sexo'=>$this->getSexo()
      ]);
   }
}

?>