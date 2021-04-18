<?php

//Semelhante ao if-else, mas usanda para uma unica variavel 
//eu dependendo de seu valor, executa o que esta dentro do case


$pagina = "sobre";

switch ($pagina) {
    case 'contato':
        print "<h1>Página de contatos</h1>";
        break;

    case 'sobre':
        print "<h1>Página Sobre nós</h1>";
        break;

    case 'servicos':
        print "<h1>Página de Serviços</h1>";
        break;

    default:
        print "<h1>Página de inicial</h1>";
        break;
}

//Resultado:
//Página Sobre nós

/**
 * A mesmo coisa de cima com if-else
 */

if ($pagina == "contato") {
    print "<h1>Página de contatos</h1>";
} else if ($pagina == "sobre") {
    print "<h1>Página Sobre nós</h1>";
} else if ($pagina == "servicos") {
    print "<h1>Página de Serviços</h1>";
} else {
    print "<h1>Página de inicial</h1>";
}


/*
Vale lembrar que o switch pode ter um case sem o break
Por convenção, nesse caso, no fina deve ter um comentário escrito "no break".

Também é importante lembrar que quando não se usa o break o PHP continua executando os cases abaixo até encontra um break
*/
