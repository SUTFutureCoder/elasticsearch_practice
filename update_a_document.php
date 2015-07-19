<?php
require 'vendor/autoload.php';
$client = new Elasticsearch\Client();

$updateParams = array(
    'index' => 'my_index',
    'type' => 'my_type',
    'id' => 'my_id',
);

$updateParams['body']['doc'] = array(
    'my_key' => 'new_value',
);

$retUpdate = $client->update($updateParams);