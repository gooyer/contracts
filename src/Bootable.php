<?php

declare(strict_types=1);

namespace Gooyer\Contracts;

interface Bootable
{
    public function boot(Application $application): void;
}
