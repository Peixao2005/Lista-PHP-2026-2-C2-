<?php 
    include("main.html");

    $numero1 = $_GET["numero1"];

    // A regra: divisível por 4 E (não divisível por 100 OU divisível por 400)
    if (($numero1 % 4 == 0 && $numero1 % 100 != 0) || ($numero1 % 400 == 0)) {
        echo "O ano $numero1 é bissexto";
    } else {
        echo "O ano $numero1 não é bissexto";
    }
?>
