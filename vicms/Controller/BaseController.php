<?php

namespace Vicms\Controller;

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
    public function render($template): void
    {
        header('Content-Type: text/html; charset=utf-8');
        echo $template;
    }
}