<?php
include("ex3.html");

$n1= $_GET["n1"];
$n2= $_GET["n2"];
$n3= $_GET["n3"];
if ($n3=="+"){ 

   echo "a soma desses numeros e:". $n1 + $n2;
}
else if ($n3=="-"){

    echo "a subtraçao desses numeros e:". $n1 - $n2;
}
else if ($n3=="%"){

    echo "a divisao desses numeros e:". $n1 / $n2;
}
else if ($n3=="x"){

    echo "a multiplicaçao desses numeros e:". $n1 * $n2;
}
?>