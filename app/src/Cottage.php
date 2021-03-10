<?php
declare(strict_types=1);

namespace DragonApp;

/**
 * @author Pauline Vos <pvos88@gmail.com>
 */
final class Cottage
{
    private Status $status;

    private function __construct(Status $status)
    {
        $this->status = $status;
    }

    public static function create(Status $status = null): self
    {
        return new static($status ?? Status::inTact());
    }
}
