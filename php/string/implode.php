<?php

$array = ['lastname', 'email', 'phone'];
$string = (implode(",", $array)); // string(20) "lastname,email,phone"
echo $string;

echo '<br /><br />';
// Devuelve un string vacío si se usa un array vacío:
var_dump(implode('hello', [])); // string(0) ""

// El separador es opcional:
var_dump(implode(['a', 'b', 'c'])); // string(3) "abc"
