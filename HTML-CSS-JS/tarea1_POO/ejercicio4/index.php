<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuenta</title>
</head>
<body>
<form action="index.php" method="post">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre">

    <label for="cantidad">Cantidad</label>
    <input type="number" name="cantidad" id="cantidad">

    <label for="tipoCuenta">Tipo de cuenta</label>
    <select name="tipoCuenta" id="tipoCuenta">
    <option value="Cuenta de ahorros">Cuenta de Ahorros</option>
    <option value="Cuenta corriente">Cuenta corriente</option>
    </select>

    <label for="numeroCuenta">Número de cuenta</label>
    <input type="number" name="numeroCuenta" id="numeroCuenta">

    <input type="submit" value="Enviar">
</form>

<?php


require "./clases/Cuenta.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $cantidad = $_POST["cantidad"];
    $tipoCuenta = $_POST["tipoCuenta"];
    $numeroCuenta = $_POST["numeroCuenta"];

    $cuenta = new Cuenta($nombre, $cantidad, $tipoCuenta, $numeroCuenta);

    echo "<h2>Datos de la cuenta</h2>";
    $cuenta->mostrarDatos();

    echo "<h2>Depósito</h2>";
    $cuenta->depositar(50);

    echo "<h2>Retiro</h2>";
    $cuenta->retirar(20);
}

?>

</body>
</html>