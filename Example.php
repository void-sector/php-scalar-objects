<?php

error_reporting(-1);
ini_set('display_errors', true);

require('./vendor/autoload.php');


use Scalar\String;

$string = new String('We love Foo');

$string->replace('Foo', 'Bar');
$string->toUpper();

echo $string . PHP_EOL;
