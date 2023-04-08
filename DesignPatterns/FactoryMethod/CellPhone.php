<?php

declare(strict_types = 1);

namespace DesignPatterns\FactoryMethod;

/**
 * Class CellPhone
 * @package DesignPatterns\FactoryMethod
 */
class CellPhone implements Phone
{
    public function call(): void
    {
        echo "Hello, I am calling with a CELL phone!";
    }
}
