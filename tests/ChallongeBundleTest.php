<?php

/*
 * This file is part of challonge-bundle.
 *
 * (c) Deniz Gelion
 *
 * @license LGPL-3.0-or-later
 */

namespace denizgelion\ChallongeBundle\Tests;

use denizgelion\ChallongeBundle\ContaoChallongeBundle;
use PHPUnit\Framework\TestCase;

class ChallongeBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoChallongeBundle();

        $this->assertInstanceOf('denizgelion\ChallongeBundle\ContaoChallongeBundle', $bundle);
    }
}
