
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?
function heightChecker($heights) {
    $n = count($heights);
    $expected = $heights;
    sort($expected); // Ordenar el arreglo esperado en orden ascendente.

    // Implementación de Bubble Sort
    for ($i = 0; $i < $n-1; $i++) {
        for ($j = 0; $j < $n-$i-1; $j++) {
            if ($heights[$j] > $heights[$j+1]) {
                // Intercambiar los valores si no están en orden.
                $temp = $heights[$j];
                $heights[$j] = $heights[$j+1];
                $heights[$j+1] = $temp;
            }
        }
    }

    // Calcular el número de índices donde los valores no coinciden.
    $count = 0;
    for ($i = 0; $i < $n; $i++) {
        if ($heights[$i] != $expected[$i]) {
            $count++;
        }
    }

    return $count;
}
 ?>
