<?php

declare(strict_types=1);

namespace LaravelLang\StatusGenerator\Contracts\Resources\Tables;

use LaravelLang\StatusGenerator\Contracts\Markdown;

interface Table extends Markdown
{
    public function push(TableRow $row): self;
}