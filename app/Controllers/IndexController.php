<?php

namespace App\Controllers;

use Symfony\Component\Routing\RouteCollection;
use App\models\User;

class IndexController
{
    // Show the product attributes based on the id.
    public function index(RouteCollection $routes)
    {
        $list = User::all();

        require_once APP_ROOT . '/views/home.php';
    }
}