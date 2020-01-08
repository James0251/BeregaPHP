<?php

$string = file_get_contents('superHeroes.json');

$tempArray = json_decode($string, true);
array_push($tempArray['members'],
    array('name' => 'PHP-Programmer', 'age' => '29',
    'secretIdentity' => 'Ivan',
    'powers' => array('write in php','write in Python', 'work with Bitrix')),
    array('name' => 'System Administrator', 'age' => '36',
        'secretIdentity' => 'Iliya',
        'powers' => array('fix PC','Configuring the system', 'work with the site')),
    array('name' => 'Nooooooob', 'age' => '32',
        'secretIdentity' => 'Anton',
        'powers' => array('try to learn php','try to learn Laravel', 'try to learn Docker'))
);
print_r($tempArray);