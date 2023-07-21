<?php

declare(strict_types=1);

namespace App\Address\Infrastructure\Adapter;

use App\Address\Domain\Entity\Address;
use Exception;

class ViaCepAdapter
{
    public function getAddressByCep(string $cep): Address
    {
        $url = "http://viacep.com.br/ws/$cep/xml/";
        $xml = simplexml_load_file($url);

        if ($xml === false) {
            throw new Exception("Não foi possível carregar o XML da API ViaCEP.");
        }

        return new Address(
            (string) $xml->logradouro,
            (string) $xml->bairro,
            (string) $xml->localidade,
            (string) $xml->uf,
            (string) $xml->cep
        );
    }    
}
