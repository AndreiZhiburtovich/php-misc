<?php

declare(strict_types = 1);

namespace App\Controllers;

/**
 * Class BaseController
 * @package App\Controllers
 */
class BaseController
{
    public function yell(): void
    {
        echo "Hi from class App\Controllers\Base!";
    }
}
