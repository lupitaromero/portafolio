<?php
class Cuenta
{
    private $nombre;
    private $cantidad;
    private $tipoCuenta;
    private $numeroCuenta;

    public function __construct($nombre, $cantidad, $tipoCuenta, $numeroCuenta)
    {
        $this->nombre = $nombre;
        $this->cantidad = $cantidad;
        $this->tipoCuenta = $tipoCuenta;
        $this->numeroCuenta = $numeroCuenta;
    }

    public function depositar($cantidad)
    {
        if ($cantidad < 5) {
            echo "El valor a depositar debe ser mayor a $5.00";
        } else {
            $this->cantidad += $cantidad;
            echo "Se ha depositado correctamente $" . $cantidad;
        }
    }

    public function retirar($valor)
    {
        if ($valor < 5) {
            echo "El valor a retirar debe ser mayor a $5.00";
        } else if ($this->cantidad < $valor) {
            echo "No hay suficiente efectivo";
        } else {
            $this->cantidad -= $valor;
            echo "Se ha retirado $" . $valor . ", quedando un saldo de $" . $this->cantidad;
        }
    }

    public function mostrarDatos()
    {
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Tipo de cuenta: " . $this->tipoCuenta . "<br>";
        echo "Número de cuenta: " . $this->numeroCuenta . "<br>";
    }
}

?>