<?php

declare(strict_types=1);

namespace Gooyer\Contracts;

use Gooyer\Container\Contracts\Container;

interface Application
{
    /**
     * Application IoC instance
     * @return Container
     */
    public function getContainer(): Container;

    /**
     * Register Module
     * @param string|Module $module
     */
    public function register($module): void;

    /**
     * Boot Application
     */
    public function boot(): void;
}