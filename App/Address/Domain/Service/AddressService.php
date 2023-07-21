<?php

declare(strict_types=1);

namespace App\Address\Domain\Service;

use App\Address\Domain\Entity\Address;
use App\Address\Infrastructure\Adapter\ViaCepAdapter;

class AddressService
{
    private $viaCepAdapter;

    public function __construct()
    {
        $this->viaCepAdapter = new ViaCepAdapter;
    }

    public function getByCep(string $cep): Address
    {
        return $this->viaCepAdapter->getAddressByCep($cep);
    }    
}
