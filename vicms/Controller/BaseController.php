<?php

namespace Vicms\Controller;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Vicms\Kernel\Kernel;

abstract class BaseController
{
    private array $params = [];

    public function __construct()
    {
        if (isset($_SERVER["params"])) {
            $this->params = $_SERVER["params"];
        }
    }

    /**
     * Get the value of params
     */
    public function getParams(): ?array
    {
        return $this->params;
    }

    /**
     * Get the value of specific param
     */
    public function getParam(string $param): mixed
    {
        return $this->params[$param] ?? null;
    }

    /**
     * Return json to client
     */
    public function json(array $response): void
    {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($response);
    }

    /**
     * Render page to client
     */
    public function render($template, $data = []): void
    {
        $twigLoader = new FilesystemLoader(Kernel::getBaseDir() . '/templates');
        $twig = new Environment($twigLoader);

        echo $twig->render($template, $data);
    }
}
