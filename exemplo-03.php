<?php
/* São 8 tipos de dados primitivos, divididos em 3 grupos:
Primeiro - Tipos básicos (Inteiro, String, Ponto Flutuante e Booleano) */

$nome = "Hcode";
$site = 'www.hcode.com.br';
$ano = 1990;
$salario = 5500.99;
$bloqueado = false;

/* Segundo - Tipos compostos (Array e Objeto) */

$frutas = array("abacaxi", "laranja", "manga");
//echo $frutas[2];

$nascimento = new DateTime();
//var_dump($nascimento);

// A função var_dump exibe informações estruturadas sobre as variáveis ​​/ expressões, incluindo o tipo e o valor.


/* Terceiro - Tipos Especiais (Resource e Null) */

$arquivo = fopen("exemplo-03.php", "r");
//var_dump($arquivo);

$nulo = NULL;


?>
