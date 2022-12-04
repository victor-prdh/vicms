<?php

namespace Vicms\Controller;

class PageController extends BaseController
{
    public function Test()
    {
        var_dump($this->getParams());

        $this->render('homepage');
    }
}