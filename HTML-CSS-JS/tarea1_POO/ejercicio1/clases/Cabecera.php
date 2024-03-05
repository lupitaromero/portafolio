<?php
class CabeceraPagina
{
    private $titulo;
    private $color;
    private $fuente;
    private $alineacion;

    public function __construct($titulo, $color, $fuente, $alineacion)
    {
        $this->titulo = $titulo;
        $this->color = $color;
        $this->fuente = $fuente;
        $this->alineacion = $alineacion;
    }

    public function obtenerDatos()
    {
        return [
            "titulo" => $this->titulo,
            "color" => $this->color,
            "fuente" => $this->fuente,
            "alineacion" => $this->alineacion,
        ];
    }

    public function establecerAlineacion($alineacion)
    {
        $this->alineacion = $alineacion;
    }

    public function imprimir()
    {
        echo "<header style='color: {$this->color}; font-family: {$this->fuente};'>";
        echo "<h1 align='{$this->alineacion}'>{$this->titulo}</h1>";
        echo "</header>";
    }
}

?>