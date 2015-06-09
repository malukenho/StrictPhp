<?php

require __DIR__ . '/../../vendor/autoload.php';

\StrictPhp\StrictPhpKernel::getInstance()->init([
    'debug'        => true,
    'cacheDir'     => realpath(__DIR__ . '/../..') . '/go-cache/',
    'includePaths' => [],
]);
