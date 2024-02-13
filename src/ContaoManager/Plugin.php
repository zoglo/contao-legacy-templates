<?php

declare(strict_types=1);

namespace Zoglo\ContaoLegacyTemplates\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Zoglo\ContaoLegacyTemplates\ContaoLegacyTemplates;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(ContaoLegacyTemplates::class)
                ->setLoadAfter([
                    ContaoCoreBundle::class
                ])->setReplace(['contao-legacy-templates']),
        ];
    }
}
