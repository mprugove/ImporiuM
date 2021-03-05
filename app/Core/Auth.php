<?php

declare(strict_types=1);

namespace App\Core;

use App\Model\User;

class Auth
{
    private static $instance;
    private $currentUser;

    
    public static function getInstance(): self
    {
        if (static::$instance === null) {
            self::$instance = new static();
        }

        return self::$instance;
    }

    public function getCurrentUser()
    {
        return $this->currentUser;
    }

}
