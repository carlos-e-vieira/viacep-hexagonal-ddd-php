<?php

declare(strict_types=1);

namespace App\Address\Application\Input;

class InputListAddressByCep
{
    private $cep;

    public function __construct(string $cep)
    {
        $this->cep = $cep;
    }

    public function getCep(): string
    {
        return $this->cep;
    }
}
