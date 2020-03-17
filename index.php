<?php
require("vendor/autoload.php");

use Src\Doda\Karcz as Dorotka;
use Src\Matt\Karcz as Mati;

$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
$log->addWarning('Foo');

Mati::marczyk();
Dorotka::marczyk();

echo "\n";
