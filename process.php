<?php

use App\Address\Controller\AddressController;

include_once('vendor/autoload.php');

$newSearchAddress = new AddressController();
$address = $newSearchAddress->getByCepAction($_POST['cep']);

echo '<h1>Tey little doctor:</h1>';
echo '<p><strong>Logradouro: </strong>' .$address['rua'].'</p>';
echo '<p><strong>Bairro: </strong>' .$address['bairro'].'</p>';
echo '<p><strong>Cidade: </strong>' .$address['cidade'].'</p>';
echo '<p><strong>Estado: </strong>' .$address['estado'].'</p>';
echo '<p><strong>CEP: </strong>' .$address['cep'].'</p>';
