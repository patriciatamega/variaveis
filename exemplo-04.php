<?php

// Exemplo de array super global ou variáveis pré-definidas:

$nome = $_GET["a"];

var_dump($nome);

/* Toda a informação vinda de GET ou POST será uma STRING.
Se precisar transformá-la em número: */

$nome = (int)$_GET["a"];

var_dump($nome);


// Variável para busca de IP de provedor de acesso do seu usuário:

$ip = $_SERVER["REMOTE_ADDR"];

echo $ip;

// A super global SERVER pega informações do ambiente, e não só do servidor (usuário e servidor)

$ip = $_SERVER["SCRIPT_NAME"];

echo $ip;

?>
