# Improve search challenge

Neste desafio vamos adicionar um campo de pesquisa a uma aplicação web.

Esta aplicação em php utiliza o Solr como repositório de informação.

---

## Helpers

- Sorl
    * [solr admin](http://localhost:8983/solr/#/carscore/query)
    * [solr queries](http://lucene.apache.org/solr/guide/6_6/common-query-parameters.html)
    * [solr querie operators](http://lucene.apache.org/solr/guide/6_6/the-standard-query-parser.html#TheStandardQueryParser-DifferencesbetweenLuceneQueryParserandtheSolrStandardQueryParser)
    * [solr facets](http://lucene.apache.org/solr/guide/6_6/faceting.html#faceting)
    * [solr facet example](http://yonik.com/solr-facet-functions/)

- PHP
    * [json_decode](http://php.net/manual/en/function.json-decode.php)
    * [array](http://php.net/manual/en/function.array.php)

- Guzzle
    * [Make a request](http://docs.guzzlephp.org/en/stable/quickstart.html)

- PHPUnit
    * [Assertions](https://phpunit.de/manual/current/en/appendixes.assertions.html)

---

## Step 1

> E necessário criar uma função que data uma string deve fazer uma query ao
solr e retornar apenas um array contendo os resultados que contêm a string em algum dos campos.

Input:

    "BMW"

Output:

    array( "results" => array( ... ));


## Step 2

> Vamos alterar a query para que apenas sejam retornadas algumas das colunas.
Queremos apenas mostrar o title, maker, model, price, valid_to.

Input:

    "BMW"

Output:

    array("results" => array(array("maker" => "...", "model" => "...",  "model" => "...", "price" => "...", "valid_to" => "..."), ...);

## Step 3

> Queremos juntar aos resultados o numero de linhas encontradas

Input:

    "BMW"

Output:

    array("totalResults" => "...", "results" => array(array("maker" => "...", "model" => "...",  "model" => "...", "price" => "...", "valid_to" => "..."), ...);

## Step 4

> Queremos juntar paginacao ao nosso motor de busca. Vamos alterar a funcao e
query de forma a que possa receber a pagina e numero de linhas a mostrar.

Input:

    "BMW", 2, 5

Output:

    array("page" => "...", "totalPages" => "...",  "totalResults" => "...", "results" => array(array("maker" => "...", "model" => "...",  "model" => "...", "price" => "...", "valid_to" => "..."), ...);

## Step 5

> Queremos dar a possiblidade de deixar os utilizadores procurarem por varias palavras no texto
sem que se tenham de preocupar com a sua ordem.

Input:

    "BMW EfficientDynamics"

Output:

    array("page" => "...", "totalPages" => "...",  "totalResults" => "...", "results" => array(array("maker" => "...", "model" => "...",  "model" => "...", "price" => "...", "valid_to" => "..."), ...);

## Step 6

> Queremos que as palavras da pesquisa estejam apenas no maximo a 1 palavra de distancia uma da outra.

Input:

    "BMW EfficientDynamics"

Output:

    array("page" => "...", "totalPages" => "...",  "totalResults" => "...", "results" => array(array("maker" => "...", "model" => "...",  "model" => "...", "price" => "...", "valid_to" => "..."), ...);

## Step 7

> Queremos dar a possiblidade aos utilizadores para pesquisar por ranges de preços.

Input:

    "BMW", null, null, 100, 1000

Output:

    array("page" => "...", "totalPages" => "...",  "totalResults" => "...", "results" => array(array("maker" => "...", "model" => "...",  "model" => "...", "price" => "...", "valid_to" => "..."), ...);


## Step 8

> Queremos mostrar a media dos precos encontrados nos resultados.

Input:

    "BMW"

Output:

    array("averagePrice" => "...", "page" => "...", "totalPages" => "...",  "totalResults" => "...", "results" => array(array("maker" => "...", "model" => "...",  "model" => "...", "price" => "...", "valid_to" => "..."), ...);

## Step 9

> Queremos dar a possiblidade aos utilizadores de ordenar por qualquer um dos campos.

Input:

    BMW", null, null, null, null, "title", "asc"

Output:

    array("averagePrice" => "...", "page" => "...", "totalPages" => "...",  "totalResults" => "...", "results" => array(array("maker" => "...", "model" => "...",  "model" => "...", "price" => "...", "valid_to" => "..."), ...);
