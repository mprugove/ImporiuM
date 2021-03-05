<?php

declare(strict_types=1);

namespace App\Core;

interface RouterInterface
{
    public function match(string $pathInfo);
}
