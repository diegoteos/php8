<?php

$asterisco = '*';

for ($i = 0; $i <= 10; $i++) {
    echo str_repeat($asterisco, $i) . '<br />';
}

echo '<br />';
echo '<br />';
echo '<br />';

for ($i = 0; $i <= 10; $i++) {
    $espacio = '&nbsp';
    echo str_repeat($espacio, 10 - $i);
    echo str_repeat($asterisco, $i) . '<br />';
}

