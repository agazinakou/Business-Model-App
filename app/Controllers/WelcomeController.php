<?php

namespace App\Controllers;

use App\Controllers\Controller;
use Bow\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Show index
     *
     * @param Request $request
     * @param string $name
     * @return string
     */
    public function index()
    {
        return view('welcome');
    }
}
