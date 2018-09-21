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
use Contao\ManagerPlugin\Bundle\Routing\RoutingPluginInterface;
use Contao\ChallongeBundle\ContaoChallongeBundle;
use Symfony\Component\Config\Loader\LoaderResolverInterface;
use Symfony\Component\HttpKernel\KernelInterface;

class Plugin implements BundlePluginInterface, RoutingPluginInterface
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
	
	public function getRouteCollection(LoaderResolverInterface $resolver, KernelInterface $kernel)
	{
		$file = __DIR__.'/../Resources/config/routing.yml';
		
		return $resolver->resolve($file)->load($file);
	}
}
