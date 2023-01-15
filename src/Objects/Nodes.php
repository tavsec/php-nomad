<?php

namespace Tavsec\PhpNomad\Objects;

use GuzzleHttp\Exception\GuzzleException;
use Tavsec\PhpNomad\HttpClient;
use Tavsec\PhpNomad\Response\Node\Node;

class Nodes implements NomadObject
{
    private HttpClient $httpClient;
    public function __construct(HttpClient $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    /**
     * @throws GuzzleException
     */
    public function list(): array
    {
        $response = json_decode($this->httpClient->request("GET", "/v1/nodes")->getBody(), true);
        $nodes = [];
        foreach ($response as $node){
            $nodes[] = new Node($node);
        }
        return $nodes;
    }
}
