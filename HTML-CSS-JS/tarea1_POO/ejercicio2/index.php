<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
<form action="index.php" method="post">
    <label for="operando1">Operando 1</label>
    <input type="number" name="operando1" id="operando1">

    <label for="operando2">Operando 2</label>
    <input type="number" name="operando2" id="operando2">

    <select name="operacion" id="operacion">
        <option value="suma">Suma</option>
        <option value="resta">Resta</option>
        <option value="multiplicacion">Multiplicación</option>
        <option value="division">División</option>
        <option value="potencia">Potencia</option>
        <option value="factorial">Factorial</option>
    </select>

    <input type="submit" value="Calcular">
</form>

<?php

require "./clases/Calculadora.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $operando1 = $_POST["operando1"];
    $operando2 = $_POST["operando2"];
    $operacion = $_POST["operacion"];

    $calculadora = new Calculadora($operando1, $operando2);

    switch ($operacion) {
        case "suma":
            echo "El resultado de la suma es: " . $calculadora->sumar();
            break;
        case "resta":
            echo "El resultado de la resta es: " . $calculadora->restar();
            break;
        case "multiplicacion":
            echo "El resultado de la multiplicación es: " . $calculadora->multiplicar();
            break;
        case "division":
            echo "El resultado de la división es: " . $calculadora->dividir();
            break;
        case "potencia":
            echo "El resultado de la potencia es: " . $calculadora->potencia();
            break;
        case "factorial":
            echo "El factorial de " . $operando1 . " es: " . $calculadora->factorial();
            break;
    }
}

?>
</body>
</html>