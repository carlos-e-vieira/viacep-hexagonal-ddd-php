<?php

declare(strict_types=1);

namespace App\Address\Domain\Entity;

class Address
{
    private $street;
    private $neighborhood;
    private $city;
    private $state;
    private $zipCode;

    public function __construct(
        string $street,
        string $neighborhood,
        string $city,
        string $state,
        string $zipCode
    ) {
        $this->street = $street;
        $this->neighborhood = $neighborhood;
        $this->city = $city;
        $this->state = $state;
        $this->zipCode = $zipCode;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function getNeighborhood(): string
    {
        return $this->neighborhood;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function getZipCode(): string
    {
        return $this->zipCode;
    }

    public function getAddress(): array
    {
        return [
            'rua' => $this->getStreet(),
            'bairro' => $this->getNeighborhood(),
            'cidade' => $this->getCity(),
            'estado' => $this->getState(),
            'cep' => $this->getZipCode()
        ];
    }
}
