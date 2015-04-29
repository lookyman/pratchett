<?php

/**
 * This file is part of lookyman/Pratchett (https://github.com/lookyman/recaptcha)
 *
 * Copyright (c) 2015 Lukáš Unger (looky.msc@gmail.com)
 *
 * For the full copyright and license information, please view the file LICENSE that was distributed with this source code.
 */

use Nette\Caching\Storages\DevNullStorage;
use Nette\Loaders\RobotLoader;

require_once __DIR__ . '/../vendor/autoload.php';

$loader = new RobotLoader;
$loader->autoRebuild = true;
$loader->setCacheStorage(new DevNullStorage)
	->addDirectory(__DIR__)
	->register();
