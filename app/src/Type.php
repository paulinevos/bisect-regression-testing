<?php
declare(strict_types=1);

namespace DragonApp;

use MyCLabs\Enum\Enum;

/**
 * @author Pauline Vos <pvos88@gmail.com>
 *
 * @method static Type dragon
 * @method static Type man
 */
final class Type extends Enum
{
    private const dragon = 'dragon';
    private const man = 'man';
}
