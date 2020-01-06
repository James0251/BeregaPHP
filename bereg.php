<?php

require_once __DIR__.'/vendor/autoload.php';

use GuzzleHttp\Client as Client;

$token = '456058734560587345605873f8450ebdbb44560456058731b7305a82c940e0aa7b825bf';
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

