<?php
declare(strict_types=1);

namespace DragonApp;

/**
 * @author Pauline Vos <pvos88@gmail.com>
 */
final class Trogdor
{
    private Type $type;

    public function __construct(Type $type = null)
    {
        $this->type = $type ?? Type::dragon();
    }

    public function burninate(Village $village): void
    {
        echo "Commencing burnination.\n";

        foreach ($village->getCottages() as $cottage) {
            $cottage->burn();
        }

        if ($village->isBurned()) {
            echo "Burnination completed.\n";
        }
    }

    public function isDragonMan(): bool
    {
        return $this->type->equals(Type::dragonMan());
    }

    public function isDragon(): bool
    {
    	return $this->type->equals(Type::dragon());
    }
}
