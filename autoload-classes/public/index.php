<?php

declare(strict_types = 1);

spl_autoload_register(function($className) {
    $className = lcfirst($className); // for root (1st level) directories
    $dirSeparator = DIRECTORY_SEPARATOR;
    $dirCurrent = __DIR__;
    $className = str_replace('\\', $dirSeparator, $className);
    $file = "{$dirCurrent}{$dirSeparator}..{$dirSeparator}{$className}.php";
    if (is_readable($file)) require_once $file;
});

use App\Controllers\BaseController;
use App\Models\Page;
use ExtraClasses\SomeClass;

$controller = new BaseController();
$model = new Page();
$someExtraClassObject = new SomeClass();

header("Content-type: text/plain");

$myObjects = [$controller, $model, $someExtraClassObject];

foreach ($myObjects as $instance) {
    $instance->yell();
    echo PHP_EOL;
}
