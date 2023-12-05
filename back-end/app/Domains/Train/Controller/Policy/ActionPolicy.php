<?php

namespace App\Domains\Train\Controller\Policy;

class ActionPolicy
{
    public function register()
    {
        Gate::define('Train-view', [self::class, 'view']);
    }

    public function view()
    {
    }
}
