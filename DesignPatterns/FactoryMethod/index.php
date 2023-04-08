<?php

declare(strict_types = 1);

require "PhoneInterface.php";
require "Cellphone.php";
require "Smartphone.php";
require "PhoneFactory.php";

use DesignPatterns\FactoryMethod\PhoneFactory;

$factory = new PhoneFactory();
$cellPhone = $factory->createCellPhone();
$smartPhone = $factory->createSmartPhone();

header("Content-type: text/plain");

$cellPhone->call();
echo PHP_EOL;
$smartPhone->call();
