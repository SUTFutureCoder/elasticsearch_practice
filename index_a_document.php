<?php
require 'vendor/autoload.php';

$client = new Elasticsearch\Client();

$params = array(
    'body' => array('testField' => 'abc'),
    'index' => 'my_index',
    'type' => 'my_type',
    'id' => 'my_id',
);

$ret = $client->index($params);