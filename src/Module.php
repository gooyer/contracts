<?php

declare(strict_types=1);

namespace Gooyer\Contracts;

interface Module
{
    /**
     * Register method load all pre-requirements
     * @return mixed
     */
    public function register(): void;

    /**
     * Boot Module
     * @return mixed
     */
    public function boot();
}