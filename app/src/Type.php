<?php
declare(strict_types=1);

namespace DragonApp;

use MyCLabs\Enum\Enum;

/**
 * @author Pauline Vos <pvos88@gmail.com>
 *
 * @method static Type man
 * @method static Type dragonMan
 * @method static Type dragon
 */
final class Type extends Enum
{
    private const man = 'man';
    private const dragonMan = 'dragonMan';
    private const dragon = 'dragon';
}
