<?php

namespace Vicms\Controller;

use Vicms\Kernel\Kernel;

class PageController extends BaseController
{

    public function Homepage()
    {
        $this->render('base.html.twig');
    }

    public function Page()
    {
        $currentPage = $this->getParam('page');
        $this->render('page.html.twig', [
            'page' => $currentPage
        ]);
    }

    public function Test()
    {
        $this->render('test.html.twig');
    }
}