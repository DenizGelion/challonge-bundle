<?php

/*
 * This file is part of [challonge-bundle].
 *
 * (c) Deniz Gelion
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\ChallongeBundle\Tests;

use Contao\ChallongeBundle\ContaoChallongeBundle;
use PHPUnit\Framework\TestCase;

class ContaoChallongeBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoChallongeBundle();

        $this->assertInstanceOf('Contao\ChallongeBundle\ContaoChallongeBundle', $bundle);
    }
}
