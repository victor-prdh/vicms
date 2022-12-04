<?php

namespace Vicms\Kernel;

use Vicms\Http\Server;

class Kernel
{

    /**
     * Path for the config folder
     */
    private string $configFolderPath;

    public function __construct($configFolderPath)
    {
        $this->setConfigFolderPath($configFolderPath);
        new Server($configFolderPath);
    }

    /**
     * Set path for the config folder
     *
     * @return  self
     */
    public function setConfigFolderPath($configFolderPath)
    {
        $this->configFolderPath = $configFolderPath;

        return $this;
    }
}