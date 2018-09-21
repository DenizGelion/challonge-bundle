<?php

/*
 * This file is part of [challonge-bundle].
 *
 * (c) Deniz Gelion
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\ChallongeBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\ChallongeBundle\ContaoChallongeBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ContaoChallongeBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
