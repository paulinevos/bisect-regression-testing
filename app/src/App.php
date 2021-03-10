<?php

declare(strict_types=1);

namespace DragonApp;

final class App
{
    public function run(): void
    {
        $village = Village::create();
        $trogdor = new Trogdor(Type::dragon());

        if ($trogdor->isDragonMan()) {
            $trogdor->burninate($village);
        }
    }
}
