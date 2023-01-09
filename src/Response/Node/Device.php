<?php

namespace Tavsec\PhpNomad\Response\Node;

class Device
{
    private string $name;
    private int $count;
    /**
     * @var DeviceConstraint[]
     */
    private array $constraints;
    /**
     * @var DeviceAffinity[]
     */
    private array $affinities;
}
