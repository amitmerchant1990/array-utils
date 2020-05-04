<?php

require __DIR__.'/vendor/autoload.php';

use AmitMerchant\ArrayUtils;

$mappedArray = ArrayUtils::getInstance()
                    ->collect([1, 2, 3, 4, 800])
                    ->map(function($iteration) {
                        return $iteration * 2;
                    });

print_r($mappedArray);

$filteredArray = ArrayUtils::getInstance()
                    ->collect([1, 2, 3, 4, 800])
                    ->filter(function($iteration) {
                        return $iteration & 1;
                    });

print_r($filteredArray);

$isInArray = ArrayUtils::getInstance()->collect(['red', 'green', 'blue'])->contains('green');

var_export($isInArray);

$user = [
    'Name' => 'Peter', 
    'Age'=> '41',
    'Country' => 'USA'
];

$arrayValues = ArrayUtils::getInstance()->collect($user)->getValues();

print_r($arrayValues);

$user = [
    'Name' => 'Peter', 
    'Age'=> '41',
    'Country' => 'USA'
];

$arrayKeys = ArrayUtils::getInstance()->collect($user)->getKeys();

print_r($arrayKeys);