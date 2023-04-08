<?php

declare(strict_types = 1);

namespace DesignPatterns\FactoryMethod;

/**
 * Class PhoneFactory
 * @package DesignPatterns\FactoryMethod
 */
class PhoneFactory
{
    /**
     * @return Phone
     */
    public function createCellPhone(): Phone
    {
        return new CellPhone();
    }

    /**
     * @return Phone
     */
    public function createSmartPhone(): Phone
    {
        return new SmartPhone();
    }
}
