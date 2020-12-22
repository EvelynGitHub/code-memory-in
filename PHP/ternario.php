<?php

/**
 * O if ternário é como se fosse um if escrito de maneira reduzida
 */
//====================================================
// USANDO if-else

if (isset($_GET['nome'])) {
    $nome = $_GET['nome'];
} else {
    $nome = 'Vazio';
}

echo "1- $nome <br>";

//====================================================
// USANDO OPERADOR TERNÁRIO
$nome = (isset($_GET['nome'])) ? $_GET['nome'] : 'Nulo';
echo "2- $nome <br>";

//====================================================
// EXCLUSIVIDADE PHP
$nome = $_GET['nome'] ?? 'Vazio de novo';
echo "3- $nome <br>";


/**
 * Resultado:
 * 3- Vazio de novo
 * 2- Nulo
 * 1- Vazio 
 */

/**
 * A ordem em que aparecem pode variam, mas
 * Os valores de cada "echo" são fieis a condição que o antecede
 */
