<?php

require 'vendor/autoload.php';

use MongoDB\Client;

try {

    $client = new Client('mongodb://localhost:27017');
    $database = $client->RapidCure;
} catch (\Exception $e) {
    echo 'Erro ao conectar ao Banco de Dados RapidCure: ' . $e->getMessage();
}

?>