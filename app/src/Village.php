<?php
declare(strict_types=1);

namespace DragonApp;

/**
 * @author Pauline Vos <pvos88@gmail.com>
 */
final class Village
{
    private array $cottages;

    private function __construct(Cottage ...$cottages)
    {
        $this->cottages = $cottages;
    }

    public static function create(Cottage ...$cottages): self
    {
        if (count($cottages) === 0) {
            return new static(
                Cottage::create(),
                Cottage::create(),
                Cottage::create(),
            );
        }

        return new static($cottages);
    }

    public function getCottages()
    {
        return $this->cottages;
    }
}
