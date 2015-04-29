<?php

/**
 * This file is part of lookyman/Pratchett (https://github.com/lookyman/pratchett)
 *
 * Copyright (c) 2015 Lukáš Unger (looky.msc@gmail.com)
 *
 * For the full copyright and license information, please view the file LICENSE that was distributed with this source code.
 */

namespace lookyman\Pratchett\DI;

use Nette\DI\CompilerExtension;
use Nette\PhpGenerator\ClassType;

/**
 * Adds "X-Clacks-Overhead: GNU Terry Pratchett" header.
 *
 * @author Lukáš Unger <looky.msc@gmail.com>
 */
class PratchettExtension extends CompilerExtension
{

	public function afterCompile(ClassType $class)
	{
		if ($this->isCli()) {
			return;
		}

		$class->getMethod('initialize')
			->addBody('header(?);', ['X-Clacks-Overhead: GNU Terry Pratchett']);
	}

	/**
	 * @return bool
	 */
	protected function isCli()
	{
		return PHP_SAPI === 'cli';
	}

}
