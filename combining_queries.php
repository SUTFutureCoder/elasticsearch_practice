<?php
//合并查询
//http://blog.csdn.net/dm_vincent/article/details/41720193

require 'vendor/autoload.php';
$client = new Elasticsearch\Client();

$params = array(
    'index' => 'my_index',
    'type' => 'my_type',
);

$params['body']['query']['bool']['must']['match']['title'] = 'quick';
$params['body']['query']['bool']['must_not']['match']['title'] = 'lazy';
$params['body']['query']['bool']['should'][]['match']['title'] = 'brown';
$params['body']['query']['bool']['should'][]['match']['title'] = 'dog';

$ret = $client->search($params);
print_r($ret);