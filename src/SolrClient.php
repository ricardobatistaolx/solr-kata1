<?php

namespace SolrKata;

use GuzzleHttp\Client;

class SolrClient
{

    private $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'http://localhost:8983/solr/carscore/select'
        ]);
    }

    public function makeQuery(string $input): array
    {
        $response = $this->client->get("?q=title:$input&wt=json");
        $result = $response->getBody()->getContents();
        var_dump(json_decode($result, true));
    }
}
