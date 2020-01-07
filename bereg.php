<?php

require_once __DIR__.'/vendor/autoload.php';

use GuzzleHttp\Client as Client;

$token = 'c6b3e957c6b3e957c6b3e9578dc6dd1062cc6b3c6b3e95798a7bb0603b5aabb2c8bdf09';
$version = 5.103;
$domain = 'beregaonline_tutaev';
$count = 100;
$offset = 0;

$params = [
    'access_token' => $token,
    'v' => $version,
    'domain' => $domain,
    'count' => $count,
    'offset' => $offset,
];

//Адрес страницы, откуда будем парсить, включая все вышенаписанные параметры
$url = 'https://api.vk.com/method/wall.get?'. http_build_query($params);
$response = file_get_contents($url);

$post_count = json_decode($response,true);

while ($offset < $post_count) {
    $url = 'https://api.vk.com/method/wall.get?'. http_build_query($params);
    $response = file_get_contents($url);
    $offset += 100;
    $data = $post_count['response']['items'];

    foreach($data as $i) {
        $string = $i['text']. '<br/>';
        $matched_string = preg_match_all('#администрацияТМР#su', $string);
        if ($matched_string != null) {
            print_r($string);
        }
    }
}

