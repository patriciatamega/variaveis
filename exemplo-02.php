<?php

// Concatenação é o nome dado 'a junção de duas variáveis:

$nome = "Patrícia";

$sobrenome = "Tamega";

$nomeCompleto = $nome . " " . $sobrenome;

echo $nomeCompleto;

/* Regrinhas para uso de variáveis:

   $anoNascimento = 1969;

   $nomeCompleto = ""; */



/* Se for necessário uso de número em nome de variável, só é permitido no final:

   echo $nome1 = "Patrícia"; */



/* Para limpar a variável, comando unset($nome1) */

/* Mas melhor ainda é utilizar o comando isset:

if (isset($nome1)) {

    echo $nome1; 

} */



?>