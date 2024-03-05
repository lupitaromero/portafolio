<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Encabezado</title>
    
</head>

<body>
  
<form action="index.php" method="post">
    <label for="titulo">Título</label>
    <input type="text" name="titulo" id="titulo">

    <label for="color">Color</label>
    <input type="text" name="color" id="color">

    <label for="fuente">Fuente</label>
    <input type="text" name="fuente" id="fuente">

    <label for="alineacion">Alineación</label>
    <select name="alineacion" id="alineacion">
        <option value="izquierda">Izquierda</option>
        <option value="centro">Centro</option>
        <option value="derecha">Derecha</option>
    </select>

    <input type="submit" value="Enviar">
</form>

<?php

require "./clases/Cabecera.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST["titulo"];
    $color = $_POST["color"];
    $fuente = $_POST["fuente"];
    $alineacion = $_POST["alineacion"];

    $cabecera = new CabeceraPagina($titulo, $color, $fuente, $alineacion);

    echo $cabecera->imprimir();
}

?>

</body>

</html>