<?php
require 'vendor/autoload.php';
$client = new Elasticsearch\Client();

$deleteParams['index'] = 'my_index';
$client->indices()->delete($deleteParams);