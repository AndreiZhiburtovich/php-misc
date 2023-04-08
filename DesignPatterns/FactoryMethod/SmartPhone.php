<?php

declare(strict_types = 1);

namespace DesignPatterns\FactoryMethod;

/**
 * Class SmartPhone
 * @package DesignPatterns\FactoryMethod
 */
class SmartPhone implements Phone
{
    public function call(): void
    {
        echo "Hello, I am calling with a SMART phone!";
    }
}
