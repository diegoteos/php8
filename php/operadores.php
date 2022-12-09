$a and $b	And (y)	true si tanto $a como $b son true. <br>
$a or $b	Or (o inclusivo)	true si cualquiera de $a o $b es true. <br>
$a xor $b	Xor (o exclusivo)	true si $a o $b es true, pero no ambos. <br>
! $a	Not (no)	true si $a no es true. <br>
$a && $b	And (y)	true si tanto $a como $b son true. <br>
$a || $b	Or (o inclusivo)	true si cualquiera de $a o $b es true. <br>

<?php

$a = true;
$b = true;
$c = false;
$d = false;

echo "<br/>";
$resultado = $a xor $c;
$resultado2 = $c && $d;


var_dump($resultado);
//var_dump($resultado2);