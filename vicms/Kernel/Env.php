<?php 

namespace Vicms\Kernel;

class Env
{
    private string $envfile;

    public function __construct($basedir) {
        $this->envfile = $basedir.'.env';

        $this->setupEnv();
    }

    public function setupEnv():void
    {
        $envfile = file_get_contents($this->getEnvfile());
        
        $cleanEnvfile = htmlspecialchars($envfile);
        $envConfig = explode("\n", $cleanEnvfile);
        
        foreach ($envConfig as $env) {
            $envData = explode("=", trim($env));
            
            if (!empty($envData) || !empty($envData[0]) || !empty($envData[1])) {
                $_ENV[$envData[0]] = $envData[1];
            }
        }

        if (!empty($_ENV['MODE']) && $_ENV['MODE'] === 'DEV') {
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
        }        
    }

    /**
     * Get the value of envfile
     */ 
    public function getEnvfile()
    {
        return $this->envfile;
    }
}