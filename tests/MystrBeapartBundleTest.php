<?php

declare(strict_types=1);

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace Mystr\BeapartBundle\Tests;

use Contao\SkeletonBundle\ContaoSkeletonBundle;
use Mystr\BeapartBundle\MystrBeapartBundle;
use PHPUnit\Framework\TestCase;

class MystrBeapartBundleTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $bundle = new MystrBeapartBundle();

        $this->assertInstanceOf('Mystr\BeapartBundle\MystrBeapartBundle', $bundle);
    }
}
