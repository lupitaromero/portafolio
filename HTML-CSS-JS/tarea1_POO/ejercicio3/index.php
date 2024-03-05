<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="post">
    <label for="titulo">Título</label>
    <input type="text" name="titulo" id="titulo">

    <label for="genero">Género</label>
    <input type="text" name="genero" id="genero">

    <label for="autor">Autor</label>
    <input type="text" name="autor" id="autor">

    <input type="submit" value="Enviar">
</form>

<?php

require "./clases/Cancion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST["titulo"];
    $genero = $_POST["genero"];
    $autor = $_POST["autor"];

    $cancion = new Cancion($titulo, $genero);
    $cancion->setAutor($autor);

    $cancion->mostrarDatos();
}

?>
</body>
</html>