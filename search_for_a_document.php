<?php
require 'vendor/autoload.php';
$client = new Elasticsearch\Client();

$searchParams = array(
    'index' => 'my_index',
    'type' => 'my_type',
);
$searchParams['body']['query']['match']['testField'] = 'abc';
$queryResponse = $client->search($searchParams);

print_r($queryResponse);