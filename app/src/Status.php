<?php
declare(strict_types=1);

namespace DragonApp;

use MyCLabs\Enum\Enum;

/**
 * @author Pauline Vos <pvos88@gmail.com>
 *
 * @method static Status burned()
 * @method static Status inTact()
 */
final class Status extends Enum
{
    private const burned = 'burned';
    private const inTact = 'inTact';
}
