<?php
declare(strict_types=1);

namespace DragonApp;

/**
 * @author Pauline Vos <pvos88@gmail.com>
 */
final class Trogdor
{
    public function burninate(Village $village): void
    {
        echo "Commencing burnination.\n";

        foreach ($village->getCottages() as $cottage) {
            $cottage->burn();
        }

        echo "Burnination completed.\n";
    }
}
