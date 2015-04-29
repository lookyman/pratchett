<?php

/**
 * This file is part of lookyman/Pratchett (https://github.com/lookyman/pratchett)
 *
 * Copyright (c) 2015 Lukáš Unger (looky.msc@gmail.com)
 *
 * For the full copyright and license information, please view the file LICENSE that was distributed with this source code.
 */

namespace lookyman\Pratchett\Tests\DI;

use lookyman\Pratchett\Tests\Mock\PratchettExtension;
use Nette\DI\Compiler;
use Nette\DI\Container;
use Nette\PhpGenerator\ClassType;

/**
 * Test \lookyman\Pratchett\DI\PratchettExtension.
 *
 * @author Lukáš Unger <looky.msc@gmail.com>
 */
class PratchettExtensionTest extends \PHPUnit_Framework_TestCase
{

	public function testAfterCompile()
	{
		$class = ClassType::from(Container::class);
		$initialize = $class->addMethod('initialize');

		(new PratchettExtension)
			->setCompiler(new Compiler, 'pratchett')
			->afterCompile($class);

		$this->assertSame('header(\'X-Clacks-Overhead: GNU Terry Pratchett\');
', $initialize->getBody());
	}

}
