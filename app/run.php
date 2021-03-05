<?php
declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use DragonApp\Trogdor;
use DragonApp\Village;

$village = Village::create();
$trogdor = new Trogdor();

$trogdor->burninate($village);

sleep(100000);
