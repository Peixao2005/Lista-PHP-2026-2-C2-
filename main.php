<?php

function calcularMedia($a, $b, $c) {
    $media = ($a + $b + $c) / 3;
    return $media;
}

$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$n3 = $_POST["n3"];

$resultado = calcularMedia($n1, $n2, $n3);

echo "A média é: " . $resultado;

?>