<?php
require "./clases/Personas.php";

class Pacientes extends Personas
{
    

    public $peso;
    public $altura;
    private $antecedentes;
    protected $cita;


    public function __construct($nombre, $genero, $edad, $direccion, $telefono, $correo, $peso, $altura, $cita)
    {
        //heredamos la informacion del constructor
        parent::__construct($nombre, $genero, $edad, $direccion, $telefono, $correo);
        $this-> peso = $peso;
        $this->altura = $altura;
        $this->cita = $cita;

    }

    public function setAntecedentes($antecedentes)
    {
        $this->antecedentes = $antecedentes;
    }

    public function getAntecedentes()
    {
        return "Antecedentes: " . $this->antecedentes;
    }

    //implementando el metodo obligatorio de la clase padre
    public function obtenerInformacion()
    {
        return "<div class='card'>
            <div class='card-body'>
            <h5 class='card-title'>$this->nombre</h5>
            <h6 class='card-subtitle mb-2 text-body-secondary'>$this->cita</h6>
            <p class='card-text'>
            <b>Peso: </b> $this->peso<br>
            <b>Altura: </b> $this->altura<br>
            <b>Genero: </b> $this->genero <br>
            <b>Edad: </b>$this->edad<br>
            <b>Direccion: </b>$this->direccion<br>
            <b>Telefono: </b>$this->telefono<br>
            <b>Correo: </b>$this->correo<br>".
            $this->getAntecedentes();
            " </p>
            </div>
        </div>";
    }


}