<?php

namespace Tests\Unit\Commands\Upgrade;

use Tests\TestCase;

abstract class Base extends TestCase
{
    protected ?string $fixtures = __DIR__ . '/../../../Fixtures/Resources/Upgrade';
}
