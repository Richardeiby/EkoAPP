<?php

class DatosBasicos{

    private $nombre;
    private $identificacion ;
    private $direccion ;
    private $correo ;
    private $contacto ;


    function __construct( $nombre, $identificacion , $direccion , $correo, $contacto)
    {
        $this->nombre = $nombre;
        $this->identificacion = $identificacion;
        $this->direccion = $direccion;
        $this->correo = $correo;
        $this->contacto = $contacto;
    }

    public function getData(){
        echo("Nombre: {$this->nombre} </br>
        Identificacion: {$this->identificacion}</br>
        Direccion: {$this->direccion}</br>
        Correo: {$this->correo}</br>
        Contacto: {$this->contacto}");
    }
}

$persona = new DatosBasicos("Juanito",1003706375, "Carrera 4 59 84", "brayz987@gmail.com", 3502649117);

?>


