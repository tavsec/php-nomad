<?php

namespace Tavsec\PhpNomad;

use GuzzleHttp\Exception\GuzzleException;
use Tavsec\PhpNomad\Objects\Nodes;

class NomadClient
{
    const DEFAULT_URL = "http://localhost:4646";
    private $token = null;
    private $url = null;
    private $httpClient;

    private Nodes $nodes;

    public function __construct($url = self::DEFAULT_URL, $token = ""){
        $this->token = $token;
        $this->url = $url;
        $this->httpClient = new HttpClient($url, $token);

        $this->nodes = new Nodes($this->httpClient);
    }

    public function nodes(){
        return $this->nodes;
    }


}
