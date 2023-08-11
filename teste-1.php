<?php

$EOL = (php_sapi_name() === 'cli') ? PHP_EOL : '<br>';

echo $EOL;

$paises = [
    'Brasil'            => 'Brasilia',
    'Estados Unidos'    => 'Washington ',
    'Espanha'           => 'Madrid',
    'Alemanha'          => 'Berlin',
    'Uruguai'           => 'Montevideu',
    'Argentina'         => 'Buenos Aires',
    'França'            => 'Paris'
];
arsort($paises,SORT_DESC);
array_walk($paises, function(&$value, $key) {
    $value = "A capital de $key é $value";
});
foreach ($paises as $clave => $valor) {
    echo $valor . $EOL;
}

echo $EOL;
?>