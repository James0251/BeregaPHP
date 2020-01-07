<?php

require_once __DIR__.'/vendor/autoload.php';

use GuzzleHttp\Client as Client;

$token = 'c6b3e957c6b3e957c6b3e9578dc6dd1062cc6b3c6b3e95798a7bb0603b5aabb2c8bdf09';
$version = 5.103;
$domain = 'beregaonline_tutaev';

$params = [
    'access_token' => $token,
    'v' => $version,
    'domain' => $domain,
    'count' => 1,
    'offset' => 0,
];

//Адрес страницы, откуда будем парсить, включая все вышенаписанные параметры
$url = 'https://api.vk.com/method/wall.get?'. http_build_query($params);
$data = file_get_contents($url);
//var_dump(json_decode($json));
$obj = json_decode($data,true);
$title_one = $obj['response'];
var_dump($obj);

