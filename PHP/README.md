Para executar um aquivo PHP há varias formas

uma delas é com o comando:

<pre>php -S localhost:<porta></pre>


Um outra forma, para projetos mais elaborados é usar o composer.
Para isso devesse criar uma pasta e dentro dela criar um aquivo chamado <code>composer.json</code>, seu conteudo deve ser similar a:

<pre>{
  "name": "nome_do_projeto",
  "description": "Breve descrição do projeto",
  "authors": [
    {
      "name": "Nome do Autor",
      "email": "email do autor"
    }
  ],
  "require": {
    "php": ">=5.6",
    "monolog/monolog": "2.0.*"
  }
}

</pre>
