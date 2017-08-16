# Improve search challenge

Neste desafio vamos adicionar um campo de  pesquisa a uma aplicacao web.

Esta aplicacao em php utiliza o Solr como repositorio de informacao.

---

## Helpers

- Sorl
    * [solr admin](http://localhost:8983/solr/#/carscore/query)
    * [solr rows](http://localhost:8983/solr/carscore/browse)
    * [solr queries](http://lucene.apache.org/solr/guide/6_6/common-query-parameters.html)
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

> É necessário criar uma função que dada uma string deve fazer uma query ao
solr e retornar apenas um array contendo dos resultados.

Input:

    "BMW"

Output:


## Step 2

> Vamos alterar a query para que apenas sejam retornadas algumas das colunas.
Queremos apenas mostrar o title, maker, model, price, valid_to.

Input:
    
    "BMW"

Output:


## Step 3

> Queremos juntar aos resultados o número de linhas encontradas

Input:
    
    "BMW"

Output:


## Step 4

> Queremos juntar paginação ao nosso motor de busca. Vamos alterar a função e
query de forma a que possa receber a pagina e número de linhas a mostrar.

Input:
    
    "BMW"

Output:


## Step 5

> Queremos dar a possibilidade de deixar os utilizadores procurarem por varias palavras no texto
sem que se tenham de preocupar com a sua ordem.

Input:
    
    "BMW EfficientDynamics"

Output:

## Step 6

> Queremos que as palavras da pesquisa estejam apenas no maximo a 1 palavra de distancia uma da outra.

Input:
    
    "BMW EfficientDynamics"

Output:

## Step 7

> Queremos dar a possibilidade aos utilizadores para pesquisar por ranges de preços.

Input:
    
    "BMW", 10000, 30000

Output:


## Step 8

> Queremos mostrar a média dos preços encontrados nos resultados.

Input:
    
    "BMW"

Output:


## Step 9

> Queremos dar a possibilidade aos utilizadores de ordenar por qualquer um dos campos.

Input:
    
    "BMW", "title", "asc"

Output:

