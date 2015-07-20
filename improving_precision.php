<?php
//提高精度
//http://blog.csdn.net/dm_vincent/article/details/41720193
require 'vendor/autoload.php';
$client = new Elasticsearch\Client();

$params = array(
    'index' => 'my_index',
    'type' => 'my_type',
);
$params['body']['query']['match']['title'] = array(
    'query' => 'BROWN DOG!',
    'operator' => 'and',
);

$ret = $client->search($params);
print_r($ret);
