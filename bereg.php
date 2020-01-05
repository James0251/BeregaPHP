<?php

require_once __DIR__.'/vendor/autoload.php';

use GuzzleHttp\Client as Client;

$token = 'c38aa09bc38aa09bc38aa09b74c3e44553cc38ac38aa09b9d84b30e048f8ec39a7eaba6';
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
$title_one = $obj['response']['items'][0]['copy_history'][0]['text'];
var_dump($title_one);

