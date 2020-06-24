<?php
/* São 8 tipos de dados primitivos, divididos em 3 grupos:
Primeiro - Tipos básicos (Inteiro, String, Ponto Flutuante e Booleano) */

$nome = Hcode;
$site = 'www.hcode.com.br';
$ano = 1990;
$salario = 5500.99;
$bloqueado = false;

/* Segundo - Tipos compostos (Array e Objeto) */

$frutas = array("abacaxi", "laranja", "manga");
//echo $frutas[2];

$nascimento = new DateTime();
//var_dump($nascimento);

/* Terceiro - Tipos Especiais (Research e Null) */

$arquivo = fopen("exemplo-03.php", "r");
//var_dump($arquivo);

$nulo = NULL;


?>
