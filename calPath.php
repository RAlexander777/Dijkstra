<?php

include("Dijkstra.php");


// I es la distancia infinita.
define('I',1000);

// Tamaño de la matriz
$matrixWidth = 50;

// $points es una matriz en el siguiente formato: (enrutador1, enrutador2, distancia entre ellos)
$points = array
    (
        array("1", "2", 6),
        array("1", "6", 8),
        array("1", "3", 4),
        array("2", "4", 5),
        array("2", "1", 6),
        array("2", "3", 2),
        array("3", "1", 4),
        array("3", "2", 2),
        array("3", "5", 2),
        array("4", "2", 5),
        array("4", "5", 4),
        array("5", "3", 2),
        array("5", "4", 4),
        array("5", "6", 8),
        array("6", "1", 8),
        array("6", "5", 8),                    
    );

$ourMap = array();


// Lee los puntos.

for ($i=0,$m=count($points); $i<$m; $i++) 
{
    $x = $points[$i][0];
    $y = $points[$i][1];
    $c = $points[$i][2];
    $ourMap[$x][$y] = $c;
    $ourMap[$y][$x] = $c;
}

// Asegúrese de que la distancia de un nodo a sí mismo sea siempre cero

for ($i=0; $i < $matrixWidth; $i++) 
{
    for ($k=0; $k < $matrixWidth; $k++)
    {
        if ($i == $k) $ourMap[$i][$k] = 0;
    }
}


// inicializa la clase algoritmo
$dijkstra = new Dijkstra($ourMap, I,$matrixWidth);

// $dijkstra->findShortestPath(0,13); encontrar solo la ruta del campo 0 al campo 3.
$fromClass = $_POST['fromClass'];
$toClass = $_POST['toClass'];

$dijkstra->findShortestPath($fromClass, $toClass);

// Mostrarlos resultados

echo '<pre>';
//echo "the map looks like:\n\n";
//echo $dijkstra -> printMap($ourMap);
echo "\n\n la ruta mas corta de la clase  ".$fromClass." a ".$toClass." es  :\n";
echo $dijkstra -> getResults((int)$toClass);
echo '</pre>';

?>
