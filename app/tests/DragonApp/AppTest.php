<?php

declare(strict_types=1);

namespace DragonApp;

use PHPUnit\Framework\TestCase;

class AppTest extends TestCase
{
    /**
     * @test
     */
    public function should_burninate(): void
    {
        $this->expectOutputRegex('/.*Burnination completed.$/');

        $app = new App();
        $app->run();
    }
}
