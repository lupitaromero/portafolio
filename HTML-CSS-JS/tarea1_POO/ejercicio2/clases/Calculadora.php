<?php
class Calculadora
{
    private $operando1;
    private $operando2;

    public function __construct($operando1, $operando2)
    {
        $this->operando1 = $operando1;
        $this->operando2 = $operando2;
    }

    public function sumar()
    {
        return $this->operando1 + $this->operando2;
    }

    public function restar()
    {
        return $this->operando1 - $this->operando2;
    }

    public function multiplicar()
    {
        return $this->operando1 * $this->operando2;
    }

    public function dividir()
    {
        return $this->operando1 / $this->operando2;
    }

    public function potencia()
    {
        return pow($this->operando1, $this->operando2);
    }

    public function factorial()
    {
        $factorial = 1;
        for ($i = 1; $i <= $this->operando1; $i++) {
            $factorial *= $i;
        }
        return $factorial;
    }
}

?>