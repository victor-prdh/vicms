<?php

namespace Vicms\Controller;

use Vicms\Kernel\Kernel;

class PageController extends BaseController
{

    public function Homepage()
    {
        $this->render('<h1>Homepage</h1>');
    }

    public function Page()
    {
        $currentPage = $this->getParam('page');
        $this->render('<h1>Page: '. $currentPage .'</h1>');
    }

    public function Test()
    {
        $this->render('YOOOOO');
    }
}