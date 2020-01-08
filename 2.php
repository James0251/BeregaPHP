<?php
//Открываем xml-документ по ссылке
$url = 'http://okitgo.ru/misc/xml/note.xml';
$xml = simplexml_load_string(file_get_contents($url));

//Выводим из файла все данные
echo $xml->to."<br/>"; echo $xml->from."<br/>"; echo $xml->heading."<br/>"; echo $xml->body."<br/><br/>";

//Добавляем наши данные
$cmp = $xml->addChild('homework');
$cmp->addChild('to', 'Anton ');
$cmp->addChild('from', 'Ivan ');
$cmp->addChild('heading', 'reminder ');
$cmp->addChild('body', 'On January 9 the "battle" project ');
//Выводим их, при необходимости
//echo($xml->asXML()."<br/>");
echo $xml->homework->to."<br/>";
echo $xml->homework->from."<br/>";
echo $xml->homework->heading."<br/>";
echo $xml->homework->body."<br/>";

