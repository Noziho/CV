<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../Router.php';

use Symfony\Component\ErrorHandler\Debug;
use App\Router;

debug::enable();

try {
    Router::route();
} catch (ReflectionException $e) {
    echo $e;
}