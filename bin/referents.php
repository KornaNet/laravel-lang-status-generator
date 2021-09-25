<?php

use LaravelLang\StatusGenerator\Processors\Referents;

require __DIR__ . '/../vendor/autoload.php';

/** @var \LaravelLang\StatusGenerator\Application $app */
$app = require_once __DIR__ . '/../bootstrap/app.php';

$app->processor(Referents::make());
