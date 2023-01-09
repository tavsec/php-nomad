<?php

namespace Tavsec\PhpNomad\Response\Node;

class Node
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
     * @var Resource[]
     */
    private array $reserved;


}
