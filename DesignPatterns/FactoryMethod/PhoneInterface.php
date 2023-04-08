<?php

declare(strict_types = 1);

namespace DesignPatterns\FactoryMethod;

/**
 * Interface Phone
 * @package DesignPatterns\FactoryMethod
 */
interface Phone {
    /**
     * @return mixed
     */
    public function call();
}
