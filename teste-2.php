<?php
function wasBitten(){
	return mt_rand(0,1);
}

$EOL = (php_sapi_name() === 'cli') ? PHP_EOL : '<br>';

echo (wasBitten()) ? 'Joãozinho mordeu seu dedo!'.$EOL : 'Joãozinho NÃO mordeu seu dedo!'.$EOL;

?>