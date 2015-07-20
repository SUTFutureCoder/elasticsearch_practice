<?php
//分值计算&控制精度
//http://blog.csdn.net/dm_vincent/article/details/41720193

require 'vendor/autoload.php';
$client = new Elasticsearch\Client();

$params = array(
    'index' => 'my_index',
    'type' => 'my_type',
);
$params['body']['query']['bool']['should'][]['match']['title'] = 'brown';
$params['body']['query']['bool']['should'][]['match']['title'] = 'fox';
$params['body']['query']['bool']['should'][]['match']['title'] = 'dog';
$params['body']['query']['bool']['minimum_should_match'] = 2;


$ret = $client->search($params);
print_r($ret);