<?php

declare(strict_types=1);

namespace App\Controller;

class HomeController extends AbstractController
{
    public function __construct() {
        parent::__construct();
    }

    public function indexAction()
    {
        return $this->view->render('home');
    }
}
