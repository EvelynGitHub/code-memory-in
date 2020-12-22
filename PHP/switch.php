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