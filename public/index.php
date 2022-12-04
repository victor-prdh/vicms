<?php
$time_start = microtime(true);

use Vicms\Kernel\Kernel;

require '../vendor/autoload.php';

$kernel = new Kernel();

if (!empty($_ENV['MODE']) && $_ENV['MODE'] === 'DEV') {
    $time_end = microtime(true);
    $time = $time_end - $time_start;

    echo 'Speed: ' . $time . 'sec';
}
