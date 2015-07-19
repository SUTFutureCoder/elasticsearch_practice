<?php
require 'vendor/autoload.php';
$client = new Elasticsearch\Client();

$deleteParams = array(
    'index' => 'my_index',
    'type' => 'my_type',
    'id' => 'my_id',
);

$retDelete = $client->delete($deleteParams);
