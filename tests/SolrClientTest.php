<?php

namespace SolrKata;

use PHPUnit\Framework\TestCase;

class SolrClientTest extends TestCase
{
    /** @var  SolrClient */
    private $solrClient;

    public function setUp()
    {
        $this->solrClient = new SolrClient();
    }

    public function testStepOne()
    {
        $result = $this->solrClient->makeQuery("BMW");
        $this->assertInternalType('array', $result);
        $this->assertArrayHasKey('results', $result);
    }

    public function testStepTwo()
    {
        $result = $this->solrClient->makeQuery("BMW");
        $this->assertArrayHasKey('title', $result["results"][0]);
        $this->assertArrayHasKey('maker', $result["results"][0]);
        $this->assertArrayHasKey('price', $result["results"][0]);
        $this->assertArrayHasKey('valid_to', $result["results"][0]);
    }

    public function testStepTree()
    {
        $result = $this->solrClient->makeQuery("BMW");
        $this->assertArrayHasKey('totalResults', $result);
    }

    public function testStepFour()
    {
        $result = $this->solrClient->makeQuery("BMW", 2, 5);
        $this->assertArrayHasKey('page', $result);
        $this->assertArrayHasKey('totalPages', $result);
        $this->assertEquals(5, count($result["results"]));
        $this->assertEquals(2, $result['page']);
    }

    public function testStepFive()
    {
        $result = $this->solrClient->makeQuery("BMW EfficientDynamics");
    }

    public function testStepSix()
    {
        $result = $this->solrClient->makeQuery("BMW EfficientDynamics");
    }

    public function testStepSeven()
    {
        $result = $this->solrClient->makeQuery("BMW", null, null, 1000, 20000);
    }

    public function testStepEight()
    {
        $result = $this->solrClient->makeQuery("BMW");
    }

    public function testStepNine()
    {
        $result = $this->solrClient->makeQuery("BMW", null, null, null, null, "title", "asc");
    }
}
