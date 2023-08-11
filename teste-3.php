<?php
$EOL = (php_sapi_name() === 'cli') ? PHP_EOL : '<br>';

function cortarExtencoes($arquivo){
    $arq = new SplFileInfo($arquivo);
    return ".". $arq->getExtension();
}
$arrayArquivos  = ['music.mp4', 'video.mov', 'imagem.jpeg'];
$arrayExtencoes = array_map('cortarExtencoes', $arrayArquivos);
sort($arrayExtencoes);

foreach ($arrayExtencoes as $clave => $valor) {
    echo $clave+1 . " ". $valor . $EOL;
}