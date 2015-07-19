<?php
require 'vendor/autoload.php';
$client = new Elasticsearch\Client();

$getParams = array();
$getParams = array(
    'index' => 'my_index',
    'type' => 'my_type',
    'id' => 'my_id',
);

$retDoc = $client->get($getParams);
print_r($retDoc);