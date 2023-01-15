<?php

namespace Tavsec\PhpNomad\Objects;

use Tavsec\PhpNomad\HttpClient;

interface NomadObject
{
    public function __construct(HttpClient $httpClient);
}
