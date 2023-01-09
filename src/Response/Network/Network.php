<?php

namespace Tavsec\PhpNomad\Response\Network;

class Network
{
    private string $mode;
    private string $device;
    private string $cidr;
    private string $ip;
    private DnsConfig $dnsConfig;
    /**
     * @var Port[]
     */
    private array $reservedPorts;
    /**
     * @var Port[]
     */
    private array $dynamicPorts;
    private string $hostname;
}
