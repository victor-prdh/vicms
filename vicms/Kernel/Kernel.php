<?php

namespace Vicms\Kernel;

use Vicms\Http\Server;

class Kernel
{

    /**
     * Path for the config folder
     */
    private static string $configFolderPath;

    private static string $baseDir;

    public function __construct()
    {
        $baseDir = dirname(__DIR__, 2).'/';

        self::$configFolderPath = $baseDir.'config';
        self::$baseDir = $baseDir;

        new Env($baseDir);
    
        new Server(self::$configFolderPath);
    }

    public static function getBaseDir(): string
    {
        return self::$baseDir;
    }
}