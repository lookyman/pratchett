<?php

/**
 * This file is part of lookyman/Pratchett (https://github.com/lookyman/pratchett)
 *
 * Copyright (c) 2015 Lukáš Unger (looky.msc@gmail.com)
 *
 * For the full copyright and license information, please view the file LICENSE that was distributed with this source code.
 */

namespace lookyman\Pratchett\Tests\Mock;

use lookyman\Pratchett\DI\PratchettExtension as OriginalExtension;

class PratchettExtension extends OriginalExtension
{

	protected function isCli()
	{
		return FALSE;
	}

}
