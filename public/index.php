<?php

use Vicms\Kernel\Kernel;

require '../vendor/autoload.php';

$kernel = new Kernel();

if (!empty($_ENV['MODE']) && $_ENV['MODE'] === 'DEV') {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}
