<?php

declare(strict_types=1);

namespace Zoglo\ContaoLegacyTemplates;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ContaoLegacyTemplates extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
