<?php

declare(strict_types=1);

namespace App\Address\Application\Output;

use App\Address\Domain\Entity\Address;

class OutputListAddressByCep
{
    private $address;

    public function __construct(Address $address)
    {
        $this->address = $address;
    }

    public function getOutput(): array
    {
        return $this->address->getAddress();
    }
}
