<?php

namespace Tests\Concerns;

use LaravelLang\StatusGenerator\Constants\Option;
use Tests\Fixtures\Services\Command;

/** @mixin \Tests\TestCase */
trait Commands
{
    protected function command(string $name, array $options = []): void
    {
        Command::call($name, array_merge([Option::PATH() => $this->temp], $options));
    }
}