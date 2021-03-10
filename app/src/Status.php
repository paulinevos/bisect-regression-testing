<?php
declare(strict_types=1);

namespace DragonApp;

use MyCLabs\Enum\Enum;

/**
 * @author Pauline Vos <pvos88@gmail.com>
 *
 * @method static Status inTact()
 * @method static bool isInTact()
 */
final class Status extends Enum
{
    private const inTact = 'inTact';
}
