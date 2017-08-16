<?php

namespace SolrKata;

use PHPUnit\Framework\TestCase;

class SolrClientTest extends TestCase
{
    private $solrClient;

    public function setUp()
    {
        $this->solrClient = new SolrClient();
    }

    public function testMakeQuery()
    {
        $result = $this->solrClient->makeQuery("BMW");
    }
}
