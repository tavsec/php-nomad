<?php

namespace Tavsec\PhpNomad;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class HttpClient
{
    const DEFAULT_TIMEOUT = 3;
    private $client;
    public function __construct(private $baseUrl, private $token){
        $this->client = new Client([
            "base_uri" => $this->baseUrl,
            "timeout" => self::DEFAULT_TIMEOUT,
            "headers" => [
                "X-Nomad-Token" => $this->token
            ]
        ]);
    }

    /**
     * @throws GuzzleException
     */
    public function request(string $method, string $path, array $headers = []): \Psr\Http\Message\ResponseInterface
    {
        return $this->client->request($method, $path);
    }
}
