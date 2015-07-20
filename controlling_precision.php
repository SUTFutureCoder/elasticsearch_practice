<?php
//控制精度
//http://blog.csdn.net/dm_vincent/article/details/41720193

require 'vendor/autoload.php';
$client = new Elasticsearch\Client();

$params = array(
    'index' => 'my_index',
    'type' => 'my_type',
);

$params['body']['query']['match']['title'] = array(
    'query' => 'quick brown dog',
    'minimum_should_match' => '75%',
);

$ret = $client->search($params);
print_r($ret);