<?php 
include("main.html");
function fatorial($numero){
    $resultado = 1;

    for ($i = 1; $i <= $numero; $i++) {
        $resultado = $resultado * $i;
    }

    return $resultado;
}
$numero1 = $_GET["numero1"];
$numero2 = $_GET["numero2"];
// calcula os fatoriais
$fat1 = fatorial($numero1);
$fat2 = fatorial($numero2);
// soma dos fatoriais
echo "a soma dos fatoriais é: " . ($fat1 + $fat2);
?>