<?php

namespace LaravelLang\StatusGenerator\Contracts;

use Symfony\Component\Console\Output\OutputInterface;

interface Processor
{
    public function __construct(OutputInterface $output);

    public function handle(): void;
}
