<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        var_dump($_SESSION);
        return view('welcome_message');
    }
}
