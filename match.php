<?php
//http://blog.csdn.net/dm_vincent/article/details/41693125
require 'vendor/autoload.php';
$client = new Elasticsearch\Client();

$params = array(
    'index' => 'my_index',
    'type' => 'my_type',
);
$params['body']['query']['match']['title'] = 'QUICK!';

$rtn = $client->search($params);
print_r($rtn);