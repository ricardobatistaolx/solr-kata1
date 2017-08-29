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
        $response = $this->client->get(
            "?q=$input&wt=json"
        );

        $result = $response->getBody()->getContents();
        $arrayResults = json_decode($result, true);

        return [
            "results" => $arrayResults["response"]["docs"],
        ];
    }
}
