<?php
require 'vendor/autoload.php';
$client = new Elasticsearch\Client();

$indexParams = array(
    'index' => 'my_index',    
);

$indexParams['body']['settings']['number_of_shards'] = 2;
$indexParams['body']['settings']['number_of_replicas'] = 0;
$client->indices()->create($indexParams);
