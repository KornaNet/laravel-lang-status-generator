<?php

namespace LaravelLang\StatusGenerator\Facades;

use Helldar\Support\Facades\Facade;
use LaravelLang\StatusGenerator\Services\Translate as Service;

/**
 * @method static string translate(string $locale, string $text)
 */
class Translate extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Service::class;
    }
}
