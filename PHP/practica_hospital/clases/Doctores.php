<?php
require "./clases/Personas.php";

class Doctores extends Personas
{
    protected $especialidad;
    private $horas_trabajo;
    public $titulo;
    private $lugar_trabajo;
    public $JVPM;

    public function __construct($nombre, $genero, $edad, $direccion, $telefono, $correo, $especialidad, $titulo, $carnet)
    {
        //heredamos la informacion del constructor
        parent::__construct($nombre, $genero, $edad, $direccion, $telefono, $correo);
        $this->especialidad = $especialidad;
        $this->titulo = $titulo;
        $this->JVPM = $carnet;
    }

    //atributos privados usamos los metodos get y set
    /**
     * get = imprimir el atributo y retornarlo
     * set = captura la informacion del atributo
     */

    public function setHorasdeTrabajo($horas)
    {
        $this->horas_trabajo = $horas;
    }

    public function getHorasdeTrabajo()
    {
        return "Horas de Trabajo: " . $this->horas_trabajo;
    }

    public function setLugarTrabajo($lugar)
    {
        $this->lugar_trabajo = $lugar;
    }

    public function getLugarTrabajo($horas)
    {
        return "Lugar de Trabajo: " . $this->lugar_trabajo;
    }

    //implementando el metodo obligatorio de la clase padre
    public function obtenerInformacion()
    {
        return "<div class='card'>
            <div class='card-body'>
            <h5 class='card-title'>$this->nombre</h5>
            <h6 class='card-subtitle mb-2 text-body-secondary'>$this->especialidad</h6>
            <p class='card-text'>
            <b>Titulo: </b> $this->titulo <br>
            <b>Genero: </b> $this->genero <br>
            <b>Edad: </b>$this->edad<br>
            <b>Direccion: </b>$this->direccion<br>
            <b>Telefono: </b>$this->telefono<br>
            <b>Correo: </b>$this->correo<br>
            <b>JVPM: </b>$this->JVPM<br>".
            $this->getHorasdeTrabajo();
            " </p>
            </div>
        </div>";
    }

    //metodo horas trabajadas
    public function horasTrabajadas($horas_trabajo)
    {
        if($horas_trabajo >= 30 && $horas_trabajo <=40){
            return "El doctor $this->nombre  ha trabajado un horario normal de 30 a 40 horas ";
        }
        else if ($horas_trabajo > 40){
            return "El doctor $this->nombre  necesita descansar urguetemente"; 
        }

        else{
            return "El doctor $this->nombre  necesita cumplir 30 a 40 horas"; 

        }
    }
}
