<?php

declare(strict_types=1);

namespace App\Address\Controller;

use App\Address\Application\AddressApplication;
use App\Address\Application\Input\InputListAddressByCep;

class AddressController
{
    private $addressApplication;

    public function __construct()
    {
        $this->addressApplication = new AddressApplication();
    }

    public function getByCepAction(string $request): array
    {
        $cep = $request;
        
        $output = $this->addressApplication->getByCep(
            new InputListAddressByCep($cep)
        );

        return $output->getOutput();
    }
}
