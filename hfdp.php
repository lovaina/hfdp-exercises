#!/usr/bin/env php
<?php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;
use HFDPConsole\StrategyPatternCommand;

$application = new Application('Head First Design Patterns', '1.0');
$application->add(new StrategyPatternCommand());
$application->run();