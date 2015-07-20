<?php
//多词查询
//http://blog.csdn.net/dm_vincent/article/details/41720193
require 'vendor/autoload.php';
$client = new Elasticsearch\Client();

$params = array(
    'index' => 'my_index',
    'type' => 'my_type',
);
$params['body']['query']['match']['title'] = 'BROWN DOG!';
$rtn = $client->search($params);

print_r($rtn);