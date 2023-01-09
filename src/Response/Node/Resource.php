<?php

namespace Tavsec\PhpNomad\Response\Node;

use Tavsec\PhpNomad\Response\Network\Network;

class Resource
{
    private int $cpu;
    private int $cores;
    private int $memoryMb;
    private int $memoryMaxMb;
    private int $diskMb;
    /**
     * @var Network[]
     */
    private array $networks;
    /**
     * @var Device[]
     */
    private array $devices;
}
