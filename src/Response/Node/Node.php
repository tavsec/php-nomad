<?php

namespace Tavsec\PhpNomad\Response\Node;

use Tavsec\PhpNomad\Response\Response;

class Node implements Response
{
    private string $id;
    private string $datacenter;
    private string $name;
    private string $httpAddress;
    private bool $tlsEnabled;
    private array $attributes;

    /**
     * @var Resource[]
     */
    private array $resource;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getDatacenter(): string
    {
        return $this->datacenter;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getHttpAddress(): string
    {
        return $this->httpAddress;
    }

    /**
     * @return bool
     */
    public function isTlsEnabled(): bool
    {
        return $this->tlsEnabled;
    }

    /**
     * @return array
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * @return array
     */
    public function getResource(): array
    {
        return $this->resource;
    }

    /**
     * @return array
     */
    public function getReserved(): array
    {
        return $this->reserved;
    }
    /**
     * @var Resource[]
     */
    private array $reserved;

    // TODO: Add remaining properties


    public function __construct(array $response)
    {
        $this->id = $response["ID"];
        $this->datacenter = $response["Datacenter"];
        $this->name = $response["Name"];
        $this->httpAddress = $response["Address"];
        $this->tlsEnabled = boolval($response["TLSEnabled"]) ?? false;
        $this->attributes = $response["Attributes"];
        // TODO: Map all attributes
    }
}
