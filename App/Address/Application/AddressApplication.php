<?php

declare(strict_types=1);

namespace App\Address\Application;

use App\Address\Application\Input\InputListAddressByCep;
use App\Address\Application\Output\OutputListAddressByCep;
use App\Address\Domain\Service\AddressService;

class AddressApplication
{
    private $addressService;

    public function __construct()
    {
        $this->addressService = new AddressService();
    }

    public function getByCep(InputListAddressByCep $inputListAddressByCep): OutputListAddressByCep
    {
       return new OutputListAddressByCep(
            $this->addressService->getByCep($inputListAddressByCep->getCep())
       );
    }
}
