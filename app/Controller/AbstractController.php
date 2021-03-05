<?php

declare(strict_types=1);

namespace App\Controller;

use App\Core\Auth;
use App\Core\View;

abstract class AbstractController
{
    protected $view;
    protected $auth;

    public function __construct()
    {
        $this->view = new View();
        $this->auth = Auth::getInstance();
    }

    protected function isPost(): bool
    {
        return $_SERVER['REQUEST_METHOD'] === 'POST';
    }

    protected function isGet(): bool
    {
        return $_SERVER['REQUEST_METHOD'] === 'GET';
    }
}
